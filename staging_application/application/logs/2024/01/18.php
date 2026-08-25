<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2024-01-18 01:16:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/home/js/check.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-18 01:16:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/home/js/check.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-18 01:16:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/admin/javascript/hetong.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-18 01:16:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/admin/javascript/hetong.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-18 03:35:30 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-01-18 03:35:30 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-01-18 04:20:54 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-01-18 04:20:54 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-01-18 06:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-18 06:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-18 06:19:16 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-01-18 06:19:16 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-01-18 06:19:17 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-01-18 06:19:17 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-01-18 08:10:42 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-01-18 08:10:42 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-01-18 08:11:14 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-01-18 08:11:14 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-01-18 08:13:29 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-01-18 08:13:29 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-01-18 08:14:15 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-01-18 08:14:15 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-01-18 08:20:25 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-01-18 08:20:25 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-01-18 08:26:10 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-01-18 08:26:10 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-01-18 08:37:39 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-01-18 08:37:39 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-01-18 08:37:55 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-01-18 08:37:55 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-01-18 09:02:48 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-01-18 09:02:48 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-01-18 09:31:07 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-01-18 09:31:07 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-01-18 10:18:00 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-01-18 10:18:00 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-01-18 11:25:50 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-01-18 11:25:50 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-01-18 11:26:14 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-01-18 11:26:14 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-01-18 11:40:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-01-18 11:40:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-01-18 11:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-18 11:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-18 11:57:09 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-01-18 11:57:09 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-01-18 12:43:43 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-01-18 12:43:43 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-01-18 13:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-18 13:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-18 14:25:01 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-01-18 14:25:01 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-01-18 14:44:52 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-01-18 14:44:52 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-01-18 15:34:05 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-01-18 15:34:05 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-01-18 15:34:25 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-01-18 15:34:25 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-01-18 15:41:05 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-01-18 15:41:05 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-01-18 16:13:03 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-01-18 16:13:03 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-01-18 16:19:38 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-01-18 16:19:38 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Remote server has closed the connection ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-01-18 16:22:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-18 16:22:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-18 16:22:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-18 16:22:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-18 16:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-18 16:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-18 16:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-18 16:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-18 16:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-18 16:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-18 16:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-18 16:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-18 16:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-18 16:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-18 16:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-18 16:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-18 16:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-18 16:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-18 17:19:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi/conf.bin ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-18 17:19:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi/conf.bin ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-18 18:09:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-18 18:09:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-18 18:36:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-18 18:36:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-18 19:14:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-18 19:14:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-18 21:07:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-18 21:07:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-18 21:07:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-18 21:07:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}