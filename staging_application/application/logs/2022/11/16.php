<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2022-11-16 01:01:54 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2022-11-16 01:01:54 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2022-11-16 03:05:34 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2022-11-16 03:05:34 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2022-11-16 03:53:11 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2022-11-16 03:53:11 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2022-11-16 07:39:05 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2022-11-16 07:39:05 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2022-11-16 07:44:04 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 320 ]
2022-11-16 07:44:04 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 320 ]
--
#0 /var/www/html/application/classes/common_config.php(320): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 320, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2022-11-16 08:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2022-11-16 08:23:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2022-11-16 08:32:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2022-11-16 08:32:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2022-11-16 08:35:50 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 320 ]
2022-11-16 08:35:50 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 320 ]
--
#0 /var/www/html/application/classes/common_config.php(320): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 320, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2022-11-16 09:13:49 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2022-11-16 09:13:49 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2022-11-16 10:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2022-11-16 10:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2022-11-16 13:02:47 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2022-11-16 13:02:47 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2022-11-16 14:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2022-11-16 14:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2022-11-16 14:58:52 --- ERROR: ErrorException [ 8 ]: Use of undefined constant MDB_ZONE_FARE - assumed 'MDB_ZONE_FARE' ~ APPPATH/classes/model/tdispatch.php [ 4636 ]
2022-11-16 14:58:52 --- STRACE: ErrorException [ 8 ]: Use of undefined constant MDB_ZONE_FARE - assumed 'MDB_ZONE_FARE' ~ APPPATH/classes/model/tdispatch.php [ 4636 ]
--
#0 /var/www/html/application/classes/model/tdispatch.php(4636): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 4636, Array)
#1 /var/www/html/application/classes/controller/tdispatch.php(4749): Model_Tdispatch->get_zone_fare(6, '')
#2 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2022-11-16 14:58:52 --- ERROR: ErrorException [ 8 ]: Use of undefined constant MDB_ZONE_FARE - assumed 'MDB_ZONE_FARE' ~ APPPATH/classes/model/tdispatch.php [ 4636 ]
2022-11-16 14:58:52 --- STRACE: ErrorException [ 8 ]: Use of undefined constant MDB_ZONE_FARE - assumed 'MDB_ZONE_FARE' ~ APPPATH/classes/model/tdispatch.php [ 4636 ]
--
#0 /var/www/html/application/classes/model/tdispatch.php(4636): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 4636, Array)
#1 /var/www/html/application/classes/controller/tdispatch.php(4749): Model_Tdispatch->get_zone_fare(6, '')
#2 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2022-11-16 14:58:52 --- ERROR: ErrorException [ 8 ]: Use of undefined constant MDB_ZONE_FARE - assumed 'MDB_ZONE_FARE' ~ APPPATH/classes/model/tdispatch.php [ 4636 ]
2022-11-16 14:58:52 --- STRACE: ErrorException [ 8 ]: Use of undefined constant MDB_ZONE_FARE - assumed 'MDB_ZONE_FARE' ~ APPPATH/classes/model/tdispatch.php [ 4636 ]
--
#0 /var/www/html/application/classes/model/tdispatch.php(4636): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 4636, Array)
#1 /var/www/html/application/classes/controller/tdispatch.php(4749): Model_Tdispatch->get_zone_fare(6, '')
#2 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2022-11-16 14:58:52 --- ERROR: ErrorException [ 8 ]: Use of undefined constant MDB_ZONE_FARE - assumed 'MDB_ZONE_FARE' ~ APPPATH/classes/model/tdispatch.php [ 4636 ]
2022-11-16 14:58:52 --- STRACE: ErrorException [ 8 ]: Use of undefined constant MDB_ZONE_FARE - assumed 'MDB_ZONE_FARE' ~ APPPATH/classes/model/tdispatch.php [ 4636 ]
--
#0 /var/www/html/application/classes/model/tdispatch.php(4636): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 4636, Array)
#1 /var/www/html/application/classes/controller/tdispatch.php(4749): Model_Tdispatch->get_zone_fare(6, '')
#2 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2022-11-16 14:59:19 --- ERROR: ErrorException [ 8 ]: Use of undefined constant MDB_ZONE_FARE - assumed 'MDB_ZONE_FARE' ~ APPPATH/classes/model/tdispatch.php [ 4636 ]
2022-11-16 14:59:19 --- STRACE: ErrorException [ 8 ]: Use of undefined constant MDB_ZONE_FARE - assumed 'MDB_ZONE_FARE' ~ APPPATH/classes/model/tdispatch.php [ 4636 ]
--
#0 /var/www/html/application/classes/model/tdispatch.php(4636): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 4636, Array)
#1 /var/www/html/application/classes/controller/tdispatch.php(4749): Model_Tdispatch->get_zone_fare(6, '4')
#2 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2022-11-16 15:05:19 --- ERROR: ErrorException [ 8 ]: Use of undefined constant MDB_ZONE_FARE - assumed 'MDB_ZONE_FARE' ~ APPPATH/classes/model/tdispatch.php [ 4636 ]
2022-11-16 15:05:19 --- STRACE: ErrorException [ 8 ]: Use of undefined constant MDB_ZONE_FARE - assumed 'MDB_ZONE_FARE' ~ APPPATH/classes/model/tdispatch.php [ 4636 ]
--
#0 /var/www/html/application/classes/model/tdispatch.php(4636): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 4636, Array)
#1 /var/www/html/application/classes/controller/tdispatch.php(4749): Model_Tdispatch->get_zone_fare(6, '')
#2 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2022-11-16 15:05:19 --- ERROR: ErrorException [ 8 ]: Use of undefined constant MDB_ZONE_FARE - assumed 'MDB_ZONE_FARE' ~ APPPATH/classes/model/tdispatch.php [ 4636 ]
2022-11-16 15:05:19 --- STRACE: ErrorException [ 8 ]: Use of undefined constant MDB_ZONE_FARE - assumed 'MDB_ZONE_FARE' ~ APPPATH/classes/model/tdispatch.php [ 4636 ]
--
#0 /var/www/html/application/classes/model/tdispatch.php(4636): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 4636, Array)
#1 /var/www/html/application/classes/controller/tdispatch.php(4749): Model_Tdispatch->get_zone_fare(6, '')
#2 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2022-11-16 15:05:19 --- ERROR: ErrorException [ 8 ]: Use of undefined constant MDB_ZONE_FARE - assumed 'MDB_ZONE_FARE' ~ APPPATH/classes/model/tdispatch.php [ 4636 ]
2022-11-16 15:05:19 --- STRACE: ErrorException [ 8 ]: Use of undefined constant MDB_ZONE_FARE - assumed 'MDB_ZONE_FARE' ~ APPPATH/classes/model/tdispatch.php [ 4636 ]
--
#0 /var/www/html/application/classes/model/tdispatch.php(4636): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 4636, Array)
#1 /var/www/html/application/classes/controller/tdispatch.php(4749): Model_Tdispatch->get_zone_fare(6, '')
#2 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2022-11-16 15:05:19 --- ERROR: ErrorException [ 8 ]: Use of undefined constant MDB_ZONE_FARE - assumed 'MDB_ZONE_FARE' ~ APPPATH/classes/model/tdispatch.php [ 4636 ]
2022-11-16 15:05:19 --- STRACE: ErrorException [ 8 ]: Use of undefined constant MDB_ZONE_FARE - assumed 'MDB_ZONE_FARE' ~ APPPATH/classes/model/tdispatch.php [ 4636 ]
--
#0 /var/www/html/application/classes/model/tdispatch.php(4636): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 4636, Array)
#1 /var/www/html/application/classes/controller/tdispatch.php(4749): Model_Tdispatch->get_zone_fare(6, '')
#2 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2022-11-16 15:05:28 --- ERROR: ErrorException [ 8 ]: Use of undefined constant MDB_ZONE_FARE - assumed 'MDB_ZONE_FARE' ~ APPPATH/classes/model/tdispatch.php [ 4636 ]
2022-11-16 15:05:28 --- STRACE: ErrorException [ 8 ]: Use of undefined constant MDB_ZONE_FARE - assumed 'MDB_ZONE_FARE' ~ APPPATH/classes/model/tdispatch.php [ 4636 ]
--
#0 /var/www/html/application/classes/model/tdispatch.php(4636): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 4636, Array)
#1 /var/www/html/application/classes/controller/tdispatch.php(4749): Model_Tdispatch->get_zone_fare(6, '4')
#2 [internal function]: Controller_Tdispatch->action_get_citymodel_fare_details()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Tdispatch))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2022-11-16 15:28:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/public_login_new/b25seXNjYW5z/3ce00749dd913534 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2022-11-16 15:28:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/public_login_new/b25seXNjYW5z/3ce00749dd913534 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2022-11-16 17:33:18 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2022-11-16 17:33:18 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2022-11-16 18:57:28 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2022-11-16 18:57:28 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2022-11-16 20:01:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2022-11-16 20:01:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2022-11-16 21:31:42 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2022-11-16 21:31:42 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}