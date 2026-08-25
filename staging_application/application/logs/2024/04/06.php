<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2024-04-06 01:14:42 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-04-06 01:14:42 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-04-06 01:30:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 01:30:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 02:11:48 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-04-06 02:11:48 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-04-06 02:27:47 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-04-06 02:27:47 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-04-06 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 04:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v0/id was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-04-06 04:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v0/id was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 05:28:20 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-06 05:28:20 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-06 05:40:04 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-06 05:40:04 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-06 05:41:59 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-06 05:41:59 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-06 05:46:41 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-04-06 05:46:41 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-04-06 06:11:08 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-06 06:11:08 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-06 06:51:22 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-06 06:51:22 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-06 06:54:39 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-06 06:54:39 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-06 08:26:42 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-06 08:26:42 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-06 08:37:23 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-04-06 08:37:23 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-04-06 09:31:55 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-06 09:31:55 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-06 09:37:33 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-06 09:37:33 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-06 09:40:00 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-06 09:40:00 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-06 09:43:03 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-06 09:43:03 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-06 09:52:15 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-06 09:52:15 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-06 09:53:38 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-06 09:53:38 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-06 10:12:04 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-04-06 10:12:04 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-04-06 11:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 11:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 12:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 12:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 14:17:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL script was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 14:17:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL script was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 14:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jenkins/script was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 14:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jenkins/script was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 14:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hudson/script was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 14:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hudson/script was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 14:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 14:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 14:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jenkins/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 14:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jenkins/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 14:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hudson/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 14:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hudson/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 14:18:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jmx-console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 14:18:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jmx-console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 14:18:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-04-06 14:18:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 14:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL msd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 14:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL msd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 14:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mySqlDumper was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 14:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mySqlDumper was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 14:18:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: msd1.24stable ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 14:18:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: msd1.24stable ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 14:18:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: msd1.24.4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 14:18:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: msd1.24.4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 14:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysqldumper was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 14:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysqldumper was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 14:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL MySQLDumper was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 14:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL MySQLDumper was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 14:18:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 14:18:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 14:18:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 14:18:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 14:18:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 14:18:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 14:18:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 14:18:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 14:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 14:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 14:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 14:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 14:18:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 14:18:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 14:18:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.2.1-all-languages ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 14:18:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.2.1-all-languages ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 14:18:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.2.1-english ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 14:18:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4.2.1-english ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 14:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlite/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 14:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlite/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 14:18:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SQLite/SQLiteManager-1.2.4/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 14:18:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SQLite/SQLiteManager-1.2.4/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 14:18:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SQLiteManager-1.2.4/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 14:18:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SQLiteManager-1.2.4/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 14:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlitemanager/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 14:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlitemanager/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 14:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SQlite/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 14:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SQlite/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 14:18:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SQLiteManager/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 14:18:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SQLiteManager/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 14:28:07 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-04-06 14:28:07 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-04-06 15:34:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 15:34:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 15:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 15:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 16:00:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 16:00:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 18:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 18:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 18:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 18:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 19:35:19 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-04-06 19:35:19 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-04-06 19:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 19:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 20:16:40 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-04-06 20:16:40 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-04-06 20:35:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 20:35:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 21:17:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 21:17:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 21:18:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-06 21:18:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-06 21:51:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 21:51:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 22:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 22:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 22:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 22:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 22:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 22:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 22:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 22:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 22:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 22:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 22:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 22:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 22:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 22:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 22:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 22:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 22:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 22:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 22:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 22:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 22:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 22:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 22:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 22:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 22:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 22:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 22:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 22:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 22:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 22:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 22:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 22:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 22:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 22:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 22:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 22:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 22:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 22:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 22:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-06 22:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-06 22:48:32 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-04-06 22:48:32 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-04-06 23:41:36 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-04-06 23:41:36 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}