<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2023-07-08 00:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 00:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 00:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 00:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 00:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 00:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 00:49:28 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2023-07-08 00:49:28 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-07-08 01:07:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-07-08 01:07:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-07-08 01:10:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-07-08 01:10:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-07-08 01:21:30 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-07-08 01:21:30 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-07-08 01:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 01:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 03:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL client/get_targets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-07-08 03:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL client/get_targets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-07-08 03:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 03:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 03:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-07-08 03:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-07-08 03:27:24 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-07-08 03:27:24 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-07-08 03:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-07-08 03:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-07-08 04:14:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sysadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sysadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2014/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2014/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.10-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.10-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2019/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2019/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: program/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: program/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2019/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2019/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2021/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2021/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2011/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2011/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2020/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2020/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2016/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2016/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/portable-phpmyadmin/wp-pma-mod/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/portable-phpmyadmin/wp-pma-mod/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2014/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2014/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2015/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2015/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 04:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 04:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 05:04:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-07-08 05:04:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-07-08 07:16:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-07-08 07:16:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-07-08 07:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-07-08 07:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-07-08 07:35:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 07:35:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 07:35:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-07-08 07:35:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-07-08 09:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL client/get_targets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-07-08 09:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL client/get_targets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-07-08 09:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 09:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 09:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-07-08 09:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-07-08 09:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 09:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 09:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 09:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 09:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 09:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 09:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-07-08 09:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-07-08 10:19:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-07-08 10:19:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-07-08 10:19:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-07-08 10:19:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-07-08 11:36:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-07-08 11:36:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-07-08 12:56:47 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2023-07-08 12:56:47 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-07-08 13:02:23 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-07-08 13:02:23 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-07-08 13:24:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 13:24:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 14:13:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-07-08 14:13:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-07-08 16:11:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2014/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2014/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/portable-phpmyadmin/wp-pma-mod/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/portable-phpmyadmin/wp-pma-mod/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2011/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2011/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.7/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.7/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2014/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2014/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.10-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.10-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2013/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2013/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2015/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2015/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.10-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.10-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sysadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sysadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.7/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.7/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/portable-phpmyadmin/wp-pma-mod/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/portable-phpmyadmin/wp-pma-mod/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2015/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2015/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/portable-phpmyadmin/wp-pma-mod/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/portable-phpmyadmin/wp-pma-mod/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2016/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2016/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.7/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.7/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 16:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2011/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 16:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2011/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 19:17:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-07-08 19:17:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-07-08 19:27:50 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-07-08 19:27:50 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-07-08 21:02:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Autodiscover/Autodiscover.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 21:02:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Autodiscover/Autodiscover.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 21:29:26 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-07-08 21:29:26 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-07-08 21:35:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 21:35:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 22:21:41 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2023-07-08 22:21:41 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-07-08 22:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 22:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 22:32:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-07-08 22:32:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-07-08 23:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-07-08 23:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-07-08 23:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-07-08 23:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}