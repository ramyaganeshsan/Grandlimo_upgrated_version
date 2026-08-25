<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-07-14 00:35:12 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-07-14 00:35:12 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-07-14 01:09:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 01:09:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 01:09:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 01:09:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 01:09:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 01:09:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 01:09:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 01:09:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 01:09:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 01:09:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 01:09:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 01:09:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 01:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 01:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 01:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 01:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 01:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 01:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 01:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sqlite3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 01:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sqlite3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 01:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 01:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 01:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 01:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 01:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 01:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 01:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 01:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:26:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpn_logon.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:26:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpn_logon.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 02:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 02:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 02:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 02:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:33:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 02:33:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 02:33:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 02:33:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 02:33:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 02:33:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 02:33:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 02:33:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 02:33:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:33:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:33:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:33:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:33:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 02:33:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 02:33:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:33:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:33:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:33:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:33:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 02:33:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/git.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/git.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/source.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/source.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/aws_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/aws_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/code.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/code.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/api.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/api.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/public_html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/public_html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/project.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/project.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/code.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/code.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/tokens.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/tokens.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/project.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/project.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/api.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/api.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/aws-keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/aws-keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/aws_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/aws_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/sql_dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/sql_dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/mysql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/mysql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 02:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 02:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/sql_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/sql_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/mysql_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/mysql_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/public_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/public_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/public_html_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/public_html_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/env_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/env_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/credentials_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/credentials_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/sql_dump_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/sql_dump_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/env_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/env_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/secrets_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/secrets_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/src_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/src_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/config_archive.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/config_archive.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/env_archive.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/env_archive.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/data_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/data_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/credentials_archive.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/credentials_archive.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/env_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/env_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/aws_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/aws_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/config_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/config_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/secrets_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/secrets_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/credentials_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/credentials_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/aws_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/aws_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source/source_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source/source_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/config_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/config_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/env_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/env_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/project_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/project_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source_code/env_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source_code/env_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source_code/code_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source_code/code_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/code_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/code_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/env_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/env_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/config_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/config_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/env_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/env_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/aws_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/aws_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/credentials_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/credentials_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/home_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/home_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/env_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/backend_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/backend_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/ci-cd_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/ci-cd_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/root_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/root_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/ci_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/ci_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/debug_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/debug_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/src_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/src_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/config_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/config_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/keys_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/keys_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/app_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/app_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: git/credentials_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: git/credentials_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: git/config_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: git/config_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/keys_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/keys_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/secrets_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/secrets_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/project.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/project.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy_key.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy_key.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/key_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/key_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/keys_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/keys_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gitlab.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gitlab.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/log_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/log_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/code.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/code.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/tokens.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/tokens.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: git/git_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: git/git_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/deploy_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/deploy_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/git.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/git.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/source.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/source.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/aws_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/aws_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/api.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/api.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_cred.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_cred.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tokens.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tokens.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/aws_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/aws_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/aws-keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/aws-keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/api.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/api.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/code.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/code.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci-cd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci-cd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accounts.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accounts.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login_credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login_credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/mysql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/mysql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws_keys_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws_keys_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/credentials_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/credentials_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github_secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github_secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/aws_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/aws_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/project.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/project.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/public_html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/public_html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: session.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: authentication.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: authentication.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/sql_dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/sql_dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/env_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/env_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/config_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/config_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/api_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/db_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/api_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/db_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/token_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/token_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/config_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/config_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/www_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/www_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/www_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/www_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/credentials_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/credentials_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:10:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:10:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:10:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:10:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:10:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:10:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:10:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:10:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:10:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:10:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:10:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:10:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:10:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:10:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:10:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:10:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:10:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:10:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:10:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:10:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:10:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:10:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:10:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:10:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:10:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:10:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:10:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:10:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:19:33 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-14 03:19:33 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-14 03:34:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 03:34:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 03:34:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 03:34:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 03:34:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:34:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:34:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 03:34:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 03:34:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 03:34:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 03:34:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 03:34:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 03:34:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 03:34:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 03:34:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:34:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:34:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:34:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:34:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 03:34:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 03:34:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:34:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:34:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 03:34:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 03:34:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 03:34:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 03:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 03:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 03:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 03:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 04:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 04:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 04:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 04:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 04:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 04:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 04:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 04:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 04:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 04:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 04:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 04:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 04:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 04:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 04:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 04:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 04:48:32 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-14 04:48:32 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-14 04:48:33 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-14 04:48:33 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-14 04:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 04:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 04:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1752457712 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 04:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1752457712 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 04:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 04:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 04:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 04:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 04:48:34 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-14 04:48:34 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-14 04:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 04:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 04:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 04:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 04:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 04:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 04:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 04:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 04:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/cores was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 04:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/cores was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 04:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 04:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:14:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL zpoyx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 05:14:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL zpoyx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 05:40:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:40:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 05:54:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 05:54:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 06:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/text/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-14 06:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/text/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 06:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 06:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 06:18:32 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-14 06:18:32 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-14 06:18:46 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-14 06:18:46 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-14 06:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 06:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 07:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 07:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 07:15:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-14 07:15:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 07:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 07:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 07:22:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 07:22:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 09:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.smtp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.smtp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.smtp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.smtp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.live ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.live ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONTEND/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONTEND/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/jobs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/jobs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clientes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clientes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminapp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminapp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env.crt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env.crt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 09:40:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 09:40:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:19:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 10:19:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 10:37:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 10:37:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 10:37:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 10:37:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 10:37:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:37:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:37:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 10:37:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 10:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 10:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 10:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 10:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 10:37:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 10:37:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 10:37:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:37:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:37:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:37:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:37:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 10:37:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 10:37:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:37:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:37:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:37:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:37:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 10:37:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 10:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env\x1a ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env\x1a ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.env.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.env.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.env.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.env.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopify/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopify/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preview/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preview/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: printenv.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: printenv.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/.env~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/.env~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projeto/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projeto/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uat/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uat/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reactjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reactjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env.uat ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env.uat ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 10:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 10:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 11:44:34 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-14 11:44:34 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-14 13:04:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 13:04:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 13:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 13:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 13:22:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 13:22:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 13:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 13:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 13:41:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 13:41:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 13:41:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 13:41:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 13:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 13:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 14:03:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 14:03:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 14:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 14:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 14:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 14:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 14:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 14:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 14:32:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 14:32:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 14:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 14:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 15:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 15:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 15:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 15:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 15:31:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 15:31:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 15:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 15:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 15:47:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 15:47:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 15:47:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 15:47:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 16:20:36 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-07-14 16:20:36 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-07-14 17:26:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 17:26:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 17:27:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 17:27:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 17:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/x.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 17:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/x.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:52:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:52:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: certs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: certs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:52:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/cd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:52:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/cd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:52:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Theme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:52:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Theme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: \"/.env\", ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: \"/.env\", ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:52:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 0/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 0/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:52:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:52:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONT/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:52:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONT/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_access_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_access_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_security.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_security.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_iam.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_iam.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_secret_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_secret_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_tokens.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_tokens.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_s3_credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_s3_credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_iam_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_iam_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_ec2_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_ec2_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_rds_credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_rds_credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_profile.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_profile.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boto.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boto.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 18:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 18:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 19:34:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 19:34:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 19:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 19:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 19:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 19:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 19:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 19:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 19:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 19:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 19:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 19:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 19:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 19:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 20:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/wlwmanifest.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 20:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/wlwmanifest.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 20:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 20:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 20:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 20:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 21:25:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 21:25:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 21:28:24 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-14 21:28:24 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-14 21:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 21:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 21:30:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1752517799 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 21:30:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1752517799 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 21:30:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 21:30:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 21:30:25 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-14 21:30:25 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-14 21:54:15 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-14 21:54:15 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-14 21:58:41 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-14 21:58:41 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-14 22:36:16 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-14 22:36:16 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-14 22:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 22:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 22:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 22:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 22:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 22:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 22:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 22:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 22:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 22:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 22:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 22:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 22:59:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 22:59:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 22:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 22:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 22:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 22:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 22:59:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 22:59:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 22:59:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 22:59:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 22:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 22:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-14 23:16:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/logincheck was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-14 23:16:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/logincheck was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-14 23:51:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-14 23:51:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}