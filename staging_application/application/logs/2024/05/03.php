<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2024-05-03 01:08:24 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-05-03 01:08:24 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-05-03 01:44:32 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-05-03 01:44:32 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-05-03 01:52:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-05-03 01:52:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-05-03 02:09:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-05-03 02:09:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-05-03 02:09:21 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-05-03 02:09:21 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-05-03 03:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-05-03 03:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-05-03 03:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-05-03 03:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-05-03 03:32:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-05-03 03:32:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-05-03 04:36:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-05-03 04:36:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-05-03 05:09:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-05-03 05:09:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-05-03 05:26:17 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-05-03 05:26:17 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-05-03 05:43:36 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-05-03 05:43:36 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-05-03 05:48:13 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-05-03 05:48:13 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-05-03 07:01:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-05-03 07:01:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-05-03 07:03:53 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-05-03 07:03:53 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-05-03 07:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-05-03 07:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-05-03 07:04:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-05-03 07:04:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-05-03 07:05:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cluster/cluster was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-05-03 07:05:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cluster/cluster was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-05-03 07:27:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-05-03 07:27:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-05-03 09:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-05-03 09:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-05-03 09:31:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-05-03 09:31:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-05-03 09:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-05-03 09:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-05-03 09:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-05-03 09:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-05-03 09:46:03 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-05-03 09:46:03 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-05-03 10:17:13 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-05-03 10:17:13 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-05-03 10:33:46 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-05-03 10:33:46 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-05-03 10:50:34 --- ERROR: MongoCursorException [ 32 ]: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 438 ]
2024-05-03 10:50:34 --- STRACE: MongoCursorException [ 32 ]: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 438 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(438): MongoCollection->insert(Array, Array)
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(292): Kohana_MangoDB->_call('insert', Array, Array)
#2 /var/www/html/application/classes/model/manage.php(9816): Kohana_MangoDB->insert('passengers_wall...', Array)
#3 /var/www/html/application/classes/model/manage.php(9616): Model_Manage->add_wallet_log(Array)
#4 /var/www/html/application/classes/controller/manage.php(7868): Model_Manage->update_wallet_amount('308', '2', 0, '-', 1)
#5 [internal function]: Controller_Manage->action_update_passenger_wallet()
#6 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#7 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/index.php(115): Kohana_Request->execute()
#10 {main}
2024-05-03 10:50:39 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 10:50:39 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 10:50:39 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 10:50:39 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 11:05:40 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 11:05:40 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 11:05:40 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 11:05:40 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 11:05:47 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 11:05:47 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 11:06:06 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 11:06:06 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 11:06:15 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 11:06:15 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 11:06:45 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 11:06:45 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 11:07:46 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 11:07:46 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 11:08:12 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 11:08:12 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 11:08:12 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 11:08:12 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 11:08:14 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 11:08:14 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 11:08:15 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 11:08:15 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 11:08:16 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 11:08:16 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 11:08:17 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 11:08:17 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 11:16:41 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 11:16:41 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 11:30:18 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 11:30:18 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 11:33:01 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 11:33:01 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 12:06:10 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 12:06:10 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 12:14:33 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 12:14:33 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 12:18:03 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 12:18:03 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 12:38:10 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 12:38:10 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 12:38:10 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 12:38:10 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 12:38:10 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 12:38:10 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 12:38:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 12:38:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 12:38:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 12:38:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 12:39:36 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 12:39:36 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 12:41:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 12:41:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 12:41:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 12:41:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 12:41:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 12:41:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 12:41:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 12:41:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 12:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cf_scripts/scripts/ajax/ckeditor/ckeditor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-05-03 12:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cf_scripts/scripts/ajax/ckeditor/ckeditor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-05-03 12:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-05-03 12:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-05-03 13:42:15 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-05-03 13:42:15 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-05-03 13:43:03 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-05-03 13:43:03 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-05-03 13:47:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-05-03 13:47:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-05-03 13:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-05-03 13:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-05-03 13:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-05-03 13:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-05-03 14:06:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-05-03 14:06:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-05-03 14:44:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-05-03 14:44:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-05-03 15:13:23 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:13:23 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:13:23 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:13:23 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:13:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:13:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:13:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:13:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:14:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:14:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:14:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:14:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:15:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:15:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:15:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:15:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:16:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:16:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:16:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:16:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:17:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:17:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:17:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:17:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:18:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:18:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:18:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:18:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:19:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:19:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:19:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:19:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:20:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:20:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:20:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:20:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:21:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:21:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:21:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:21:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:22:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:22:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:22:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:22:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:23:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:23:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:23:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:23:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:41:17 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:41:17 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 15:50:18 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 15:50:18 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:01:50 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:01:50 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:16:29 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:16:29 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:20:56 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:20:56 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:21:11 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:21:11 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:21:26 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:21:26 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:21:41 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:21:41 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:21:56 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:21:56 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:22:08 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:22:08 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:22:11 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:22:11 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:22:26 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:22:26 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:22:41 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:22:41 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:22:56 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:22:56 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:23:11 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:23:11 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:23:26 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:23:26 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:23:41 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:23:41 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:23:56 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:23:56 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:24:08 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:24:08 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:24:11 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:24:11 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:24:26 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:24:26 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:24:41 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:24:41 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:24:56 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:24:56 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:25:11 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:25:11 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:25:26 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:25:26 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:25:41 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:25:41 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:25:56 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:25:56 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:26:08 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:26:08 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:26:11 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:26:11 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:26:26 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:26:26 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:26:41 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:26:41 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:26:56 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:26:56 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:27:11 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:27:11 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:27:26 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:27:26 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:27:41 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:27:41 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:27:56 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:27:56 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:28:08 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:28:08 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:28:11 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:28:11 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:28:26 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:28:26 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:28:41 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:28:41 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:28:56 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:28:56 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:29:11 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:29:11 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:29:27 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:29:27 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:29:42 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:29:42 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:29:57 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:29:57 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:30:09 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:30:09 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:30:11 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:30:11 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:30:27 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:30:27 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:30:42 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:30:42 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:30:57 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:30:57 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:31:12 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:31:12 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:31:27 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:31:27 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:31:42 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:31:42 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:31:57 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:31:57 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:32:09 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:32:09 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:32:11 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:32:11 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:32:27 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:32:27 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:32:42 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:32:42 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:32:57 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:32:57 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:33:12 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:33:12 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:33:27 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:33:27 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:33:42 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:33:42 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:33:57 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:33:57 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:34:09 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:34:09 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:34:12 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:34:12 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:34:27 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:34:27 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:34:42 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:34:42 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:34:57 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:34:57 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:35:12 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:35:12 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:35:27 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:35:27 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:35:42 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:35:42 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:35:57 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:35:57 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:36:09 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:36:09 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:36:12 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:36:12 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:36:27 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:36:27 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:36:42 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:36:42 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:36:58 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:36:58 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:37:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:37:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:37:28 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:37:28 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:37:43 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:37:43 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:37:58 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:37:58 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:38:10 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:38:10 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:38:12 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:38:12 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:38:28 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:38:28 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:38:43 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:38:43 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:38:58 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:38:58 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:39:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:39:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:39:28 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:39:28 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:39:43 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:39:43 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:39:58 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:39:58 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:40:10 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:40:10 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:40:12 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:40:12 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:40:28 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:40:28 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:40:43 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:40:43 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:40:46 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:40:46 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:40:55 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:40:55 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:40:55 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:40:55 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:40:55 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:40:55 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:40:55 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:40:55 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:40:56 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:40:56 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:40:56 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:40:56 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:40:56 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:40:56 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:40:56 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:40:56 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:40:57 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:40:57 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:40:57 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:40:57 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:40:58 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:40:58 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:41:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:41:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:41:28 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:41:28 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:41:43 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:41:43 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:41:58 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:41:58 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:42:10 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:42:10 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:42:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:42:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:42:28 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:42:28 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:42:43 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:42:43 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:42:58 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:42:58 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:43:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:43:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:43:28 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:43:28 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:43:43 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:43:43 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:43:58 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:43:58 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:44:10 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:44:10 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:44:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:44:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:44:28 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:44:28 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:44:43 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:44:43 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:44:58 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:44:58 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:45:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:45:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:45:28 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:45:28 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:45:43 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:45:43 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:45:58 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:45:58 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:46:10 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:46:10 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:46:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:46:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:46:28 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:46:28 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:46:43 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:46:43 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:46:58 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:46:58 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:47:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:47:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:47:28 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:47:28 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:47:43 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:47:43 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:47:58 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:47:58 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:48:10 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:48:10 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:48:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:48:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:48:28 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:48:28 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:48:43 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:48:43 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:48:58 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:48:58 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:49:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:49:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:49:28 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:49:28 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:49:43 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:49:43 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:49:58 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:49:58 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:50:10 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:50:10 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:50:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:50:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:50:28 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:50:28 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:50:43 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:50:43 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:50:58 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:50:58 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:51:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:51:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:51:28 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:51:28 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:51:43 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:51:43 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 16:51:58 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 16:51:58 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 17:03:01 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 17:03:01 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 17:04:58 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 17:04:58 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 17:29:25 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 17:29:25 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 17:35:48 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 17:35:48 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 17:46:39 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 17:46:39 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 18:01:15 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 18:01:15 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 18:02:24 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 18:02:24 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 18:34:53 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 18:34:53 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 18:51:29 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 18:51:29 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 19:03:36 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-05-03 19:03:36 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-05-03 19:07:49 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 19:07:49 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 19:13:39 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 19:13:39 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 19:32:08 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 19:32:08 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 19:35:15 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 19:35:15 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 19:54:07 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 19:54:07 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 20:07:41 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 20:07:41 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 20:08:20 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 20:08:20 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 20:16:57 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 20:16:57 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 21:01:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 21:01:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 21:11:45 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 21:11:45 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 21:17:32 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 21:17:32 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 21:40:18 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 21:40:18 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 21:40:53 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 21:40:53 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 21:42:10 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 21:42:10 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 21:42:10 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 21:42:10 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 21:42:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 21:42:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 21:42:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 21:42:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 21:42:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 21:42:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 22:22:21 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-05-03 22:22:21 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-05-03 22:44:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 22:44:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 23:36:44 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 23:36:44 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 23:43:21 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 23:43:21 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-05-03 23:56:41 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-05-03 23:56:41 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}