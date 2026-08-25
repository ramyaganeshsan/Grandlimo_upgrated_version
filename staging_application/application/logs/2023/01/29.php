<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2023-01-29 00:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 00:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-29 01:03:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 01:03:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 01:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 01:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-29 02:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 02:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-29 02:27:46 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 320 ]
2023-01-29 02:27:46 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 320 ]
--
#0 /var/www/html/application/classes/common_config.php(320): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 320, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-01-29 03:38:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 03:38:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-29 05:47:43 --- ERROR: ErrorException [ 8 ]: Undefined index: customer_type ~ APPPATH/classes/controller/manageusers.php [ 291 ]
2023-01-29 05:47:43 --- STRACE: ErrorException [ 8 ]: Undefined index: customer_type ~ APPPATH/classes/controller/manageusers.php [ 291 ]
--
#0 /var/www/html/application/classes/controller/manageusers.php(291): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 291, Array)
#1 [internal function]: Controller_Manageusers->action_passenger_search()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manageusers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-01-29 05:47:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 05:47:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 05:48:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL axis2-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 05:48:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL axis2-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-29 05:48:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL axis2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 05:48:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL axis2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-29 05:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL axis2/axis2-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 05:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL axis2/axis2-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-29 06:37:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 06:37:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-29 07:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 07:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-29 07:54:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2021/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2021/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2016/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2016/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2020/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2020/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: program/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: program/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.7/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.7/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2022/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2014/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2014/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2021/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2021/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2016/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2016/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2020/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2020/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2014/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2014/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 07:54:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 07:54:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 08:09:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 08:09:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-29 09:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 09:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 09:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 09:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-29 10:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 10:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-29 11:29:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 11:29:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-29 12:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 12:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 13:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 13:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-29 13:31:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 13:31:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-29 13:36:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 13:36:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-29 14:33:34 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-01-29 14:33:34 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-01-29 14:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 14:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-29 15:25:02 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 320 ]
2023-01-29 15:25:02 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 320 ]
--
#0 /var/www/html/application/classes/common_config.php(320): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 320, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-01-29 15:25:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 15:25:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-29 15:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 15:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-29 16:09:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 16:09:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 16:30:55 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 320 ]
2023-01-29 16:30:55 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 320 ]
--
#0 /var/www/html/application/classes/common_config.php(320): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 320, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-01-29 17:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: echo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 17:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: echo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 17:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 17:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-29 17:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 17:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-29 18:36:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 18:36:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-01-29 21:46:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/db-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2011/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2011/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.3.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2015/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2015/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sysadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sysadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpMyAdmin-5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2018/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2018/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpMyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/portable-phpmyadmin/wp-pma-mod/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/portable-phpmyadmin/wp-pma-mod/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2016/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2016/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2014/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2014/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.1.3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-5.2.0/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sysadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/sysadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.7/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.9.7/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2011/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2011/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmy/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin5/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/web/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-all-languages/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/portable-phpmyadmin/wp-pma-mod/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/portable-phpmyadmin/wp-pma-mod/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2013/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2013/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyAdmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2016/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2016/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/db/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqlmanager/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/sqlweb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-latest-english/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpmy-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2013/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2013/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-my-admin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpmyadmin3/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2011/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2011/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/websql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 21:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-01-29 21:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/php-myadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-01-29 23:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-01-29 23:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}