<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2023-05-28 00:06:57 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-05-28 00:06:57 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-05-28 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-28 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-28 01:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-28 01:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-28 03:27:57 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-05-28 03:27:57 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-05-28 03:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ip.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 03:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ip.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 05:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 05:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 05:28:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-28 05:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-28 07:04:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-28 07:04:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-28 10:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 10:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 12:15:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-28 12:15:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-28 12:15:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-28 12:15:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-28 13:13:04 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-05-28 13:13:04 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-05-28 13:25:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-28 13:25:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-28 13:25:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-28 13:25:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-28 13:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 13:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 14:55:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 14:55:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 15:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-28 15:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-28 16:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 16:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 16:37:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-28 16:37:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-28 18:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sysadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sysadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2011/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2011/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sysadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sysadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2015/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2015/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2020/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2020/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2018/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2018/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2011/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2011/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: program/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: program/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2015/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2015/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2015/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2015/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2011/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2011/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2013/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2013/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.7/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.7/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 18:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 18:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-28 18:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-28 18:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-28 18:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-28 18:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-28 18:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-28 18:43:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-28 18:43:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-28 19:05:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Autodiscover/Autodiscover.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-28 19:05:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Autodiscover/Autodiscover.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-28 20:12:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _ignition/execute-solution was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-28 20:12:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _ignition/execute-solution was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-28 22:59:11 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-05-28 22:59:11 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}