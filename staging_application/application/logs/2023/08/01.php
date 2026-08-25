<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2023-08-01 03:39:12 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-08-01 03:39:12 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-08-01 06:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 06:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 08:27:31 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-08-01 08:27:31 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-08-01 08:27:39 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-08-01 08:27:39 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-08-01 08:40:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Autodiscover/Autodiscover.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 08:40:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Autodiscover/Autodiscover.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 09:03:29 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-08-01 09:03:29 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-08-01 09:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 09:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 10:13:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 10:13:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 10:30:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 10:30:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 10:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 10:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 10:53:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 10:53:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 12:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-3.0.0.0-all-languages/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-3.0.0.0-all-languages/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.10.0.0/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.10.0.0/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.11.11/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.11.11/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.11.11.3/scripts/setup.ph ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2.11.11.3/scripts/setup.ph ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-2/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PHPMYADMIN/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PHPMYADMIN/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pHpMyAdMiN/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pHpMyAdMiN/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqladm/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqladm/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqladmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqladmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/db.init.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/db.init.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/db.init.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/db.init.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin1/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin1/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:05:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:05:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:17:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 12:17:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 12:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 12:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 12:35:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 12:35:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 13:08:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _ignition/execute-solution was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 13:08:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _ignition/execute-solution was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 13:14:56 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-08-01 13:14:56 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-08-01 13:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 13:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 15:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 15:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 15:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 15:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 15:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 15:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 16:35:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 16:35:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 17:22:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 17:22:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1_1_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1_1_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 5info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 5info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _info-backoffice.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _info-backoffice.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL symfony/public/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL symfony/public/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/index.php/v1/config/application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/index.php/v1/config/application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 00_server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 00_server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php/$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php/$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _poopinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _poopinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 02-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 02-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tool/view/phpinfo.view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tool/view/phpinfo.view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 0.0_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 0.0_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: q.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: q.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: u.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: u.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfodev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfodev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scripts/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scripts/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpsysinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpsysinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpsysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpsysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test7.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test7.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configure.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configure.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL file/php/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL file/php/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tz.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tz.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminphp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminphp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fedora.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fedora.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php52/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php52/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache/i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache/i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file/php/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file/php/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configure.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configure.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL php-info/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL php-info/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpsysinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpsysinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpcustom_info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpcustom_info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tools/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tools/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testphp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testphp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpdetails was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpdetails was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinformation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinformation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ~cats/php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ~cats/php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/admin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2023-08-01 19:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/admin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL php_details was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL php_details was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboardadmin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboardadmin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php-dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php-dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tester.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tester.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test9.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test9.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: of.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: of.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test8.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test8.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpconf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpconf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboardadmin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboardadmin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php5 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php5 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php5 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php5 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: channel/team/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: channel/team/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linusadmin-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linusadmin-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: o.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: o.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webdav/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webdav/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testphpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testphpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminphp.php/configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminphp.php/configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: isadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: isadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: viewinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: viewinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp/testphp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp/testphp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL php-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL php-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lindex.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lindex.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test123.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test123.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2023-08-01 19:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: foo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: foo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ~cats/php/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ~cats/php/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpsysinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:36:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpsysinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboardadmin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboardadmin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL root/infophp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:36:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL root/infophp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL symfony/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL symfony/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 123.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 123.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webdav/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webdav/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: l.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: l.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: time.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: time.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configure.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configure.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: in.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: in.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test6.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test6.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sysinfo/tabs/php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sysinfo/tabs/php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.default ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.default ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret_key.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qq.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qq.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: w.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ocp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ocp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devs.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL testphpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:36:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL testphpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: information.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: information.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file/php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file/php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/php-details.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/php-details.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ~cats/php/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ~cats/php/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpsysinfo/phpsysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpsysinfo/phpsysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dep.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dep.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webdav/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webdav/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: up.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: up.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2023-08-01 19:36:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:36:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:36:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:36:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/utility.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/utility.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.prod.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.prod.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json.enc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json.enc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dockerrun.aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dockerrun.aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.production.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.production.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bower.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bower.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsconfig.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsconfig.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alternatives.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alternatives.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samba.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samba.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smb.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smb.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _alias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _alias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:37:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jetty-env.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jetty-env.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.flaskenv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.flaskenv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: results/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: results/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:37:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:37:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.list ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.list ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/printenv.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/printenv.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL envrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL envrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuators/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:37:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuators/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: printenv.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: printenv.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL management/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-01 19:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL management/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-01 19:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:37:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:37:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 19:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-01 19:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-01 22:21:15 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-08-01 22:21:15 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}