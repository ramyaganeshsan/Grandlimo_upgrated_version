<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2023-04-28 00:14:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-28 00:14:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-28 09:04:08 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-04-28 09:04:08 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-04-28 09:18:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 09:18:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 09:37:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 09:37:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 11:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-28 11:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-28 12:00:42 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-04-28 12:00:42 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-04-28 13:29:26 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-04-28 13:29:26 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-04-28 13:41:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 13:41:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 13:43:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.1.0.0.1682676787903.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 13:43:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.1.0.0.1682676787903.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 14:02:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.1.0.0.1682676787903.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 14:02:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.1.0.0.1682676787903.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 15:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-28 15:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-28 15:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 15:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 15:40:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-28 15:40:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-28 17:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-28 17:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-28 18:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 18:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 19:54:34 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-04-28 19:54:34 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-04-28 21:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2019/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2019/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.7/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.7/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2021/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2021/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2012/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2012/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2014/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2014/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.10-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.10-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/portable-phpmyadmin/wp-pma-mod/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/portable-phpmyadmin/wp-pma-mod/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: program/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: program/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2019/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2019/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sysadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sysadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2014/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2014/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2016/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2016/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/portable-phpmyadmin/wp-pma-mod/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/portable-phpmyadmin/wp-pma-mod/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-28 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-28 21:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-28 21:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}