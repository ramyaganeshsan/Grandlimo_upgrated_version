<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2024-03-05 00:01:18 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 00:01:18 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 00:01:31 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 00:01:31 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 00:30:04 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 00:30:04 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 00:38:26 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 00:38:26 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 00:46:07 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 00:46:07 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 00:46:38 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 00:46:38 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 01:15:18 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 01:15:18 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 01:50:22 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 01:50:22 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 01:52:25 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 01:52:25 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 01:53:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 01:53:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 02:10:10 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 02:10:10 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 02:14:20 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 02:14:20 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 02:17:10 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 02:17:10 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 02:36:39 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 02:36:39 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 02:36:51 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 02:36:51 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 02:57:02 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 02:57:02 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 03:05:34 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 03:05:34 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 03:15:34 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 03:15:34 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 03:29:07 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 03:29:07 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 03:29:12 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 03:29:12 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 04:39:47 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 04:39:47 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 05:22:05 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 05:22:05 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 05:37:37 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 05:37:37 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 06:29:56 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 06:29:56 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 06:59:02 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 06:59:02 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 06:59:05 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 06:59:05 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 06:59:31 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 06:59:31 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 07:29:11 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 07:29:11 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 07:33:31 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 07:33:31 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 08:03:33 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 08:03:33 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 08:39:14 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 08:39:14 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 08:44:55 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 08:44:55 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 09:00:29 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 09:00:29 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 09:13:22 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 09:13:22 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 09:14:02 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 09:14:02 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 09:20:08 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 09:20:08 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 09:20:48 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 09:20:48 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 09:21:40 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 09:21:40 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 09:37:34 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 09:37:34 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 09:37:39 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 09:37:39 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 09:43:58 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 09:43:58 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 09:47:22 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 09:47:22 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 09:51:30 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 09:51:30 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 09:51:30 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 09:51:30 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 10:15:07 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 10:15:07 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 10:35:02 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 10:35:02 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 10:46:32 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 10:46:32 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 10:47:00 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 10:47:00 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 10:47:03 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 10:47:03 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 10:50:34 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 10:50:34 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 11:05:01 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 11:05:01 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 11:29:15 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 11:29:15 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 11:30:55 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 11:30:55 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 12:28:40 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 12:28:40 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 12:32:47 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 12:32:47 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 12:32:59 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 12:32:59 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 12:44:22 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 12:44:22 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 13:00:25 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 13:00:25 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 13:00:35 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 13:00:35 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 13:11:34 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 13:11:34 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 13:33:03 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 13:33:03 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 13:33:06 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 13:33:06 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 13:34:02 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 13:34:02 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 13:34:09 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 13:34:09 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 13:48:21 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 13:48:21 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 13:49:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 13:49:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 13:49:16 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 13:49:16 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 13:50:28 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 13:50:28 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 13:51:49 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 13:51:49 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 13:51:50 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 13:51:50 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 13:51:50 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 13:51:50 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 13:51:50 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 13:51:50 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 13:51:51 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 13:51:51 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 13:51:51 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 13:51:51 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 13:51:51 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 13:51:51 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 13:51:51 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 13:51:51 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 13:51:51 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 13:51:51 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 13:51:52 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 13:51:52 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 13:57:33 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 13:57:33 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 14:28:15 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 14:28:15 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 14:28:28 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 14:28:28 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 14:37:52 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 14:37:52 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 14:58:47 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 14:58:47 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 15:10:15 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 15:10:15 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 15:10:33 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 15:10:33 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 15:23:38 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 15:23:38 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 15:28:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 15:28:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 15:28:17 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 15:28:17 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 15:28:18 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 15:28:18 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 15:36:33 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 15:36:33 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 15:38:09 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 15:38:09 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 15:38:42 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 15:38:42 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 15:40:04 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 15:40:04 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 16:00:55 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 16:00:55 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 16:01:06 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 16:01:06 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 16:14:02 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 16:14:02 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 16:14:16 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 16:14:16 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 17:22:24 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 17:22:24 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 17:24:57 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 17:24:57 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 17:45:51 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 17:45:51 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 18:00:41 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 18:00:41 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 18:03:48 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 18:03:48 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 18:03:51 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 18:03:51 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 18:26:03 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 18:26:03 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 18:28:09 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 18:28:09 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 18:28:50 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 18:28:50 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 18:28:58 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 18:28:58 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 18:42:15 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 18:42:15 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:11:58 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:11:58 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:11:59 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:11:59 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:11:59 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:11:59 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:11:59 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:11:59 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:11:59 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:11:59 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:11:59 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:11:59 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:11:59 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:11:59 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:11:59 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:11:59 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:11:59 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:11:59 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:11:59 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:11:59 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:11:59 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:11:59 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:11:59 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:11:59 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:11:59 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:11:59 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:11:59 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:11:59 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:11:59 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:11:59 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:11:59 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:11:59 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:11:59 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:11:59 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:11:59 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:11:59 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:12:00 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:12:00 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Previous connection attempts failed, server blacklisted ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:14:27 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:14:27 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:20:11 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:20:11 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:27:51 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:27:51 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 19:32:30 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 19:32:30 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 21:02:12 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 21:02:12 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 21:02:24 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 21:02:24 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 21:49:43 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 21:49:43 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 21:57:22 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 21:57:22 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 22:08:37 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 22:08:37 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 22:08:41 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 22:08:41 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 22:16:55 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 22:16:55 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 22:16:59 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 22:16:59 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 22:28:29 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 22:28:29 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 22:51:23 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 22:51:23 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 23:04:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 23:04:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 23:18:27 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 23:18:27 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 23:18:40 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 23:18:40 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-03-05 23:54:26 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-03-05 23:54:26 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 10.128.0.5:27020: Connection refused ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}