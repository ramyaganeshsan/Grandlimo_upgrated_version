<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2023-01-14 00:09:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-14 00:09:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-14 00:46:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 00:46:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 01:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 01:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 02:57:20 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-01-14 02:57:20 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-01-14 02:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-14 02:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-14 03:52:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 03:52:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 04:06:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: echo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 04:06:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: echo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 04:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-14 04:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-14 04:56:55 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 320 ]
2023-01-14 04:56:55 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 320 ]
--
#0 /var/www/html/application/classes/common_config.php(320): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 320, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-01-14 06:18:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-14 06:18:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-14 11:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-14 11:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-14 11:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2014/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2014/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2012/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2012/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.10-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.10-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: program/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: program/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.10-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.10-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2012/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2012/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.7/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.7/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 11:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 11:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.10-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.10-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2012/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2012/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2012/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2012/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2013/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2013/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.10-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.10-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2021/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2021/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2020/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2020/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: program/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: program/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2021/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2021/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2016/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2016/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sysadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sysadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 12:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 12:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-14 12:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-14 14:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2011/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2011/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2019/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2019/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2018/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2018/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2013/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2013/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2012/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2012/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2015/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2015/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.7/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.7/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2020/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2020/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2011/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2011/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2020/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2020/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2015/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2015/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2018/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2018/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2015/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2015/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 14:32:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 14:32:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 18:09:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 18:09:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 21:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-14 21:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-14 23:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-14 23:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-14 23:35:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-14 23:35:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}