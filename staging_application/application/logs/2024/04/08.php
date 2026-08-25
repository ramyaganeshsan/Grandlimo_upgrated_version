<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2024-04-08 01:19:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-08 01:19:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-08 02:31:39 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-04-08 02:31:39 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-04-08 05:42:14 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-04-08 05:42:14 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-04-08 06:10:43 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-04-08 06:10:43 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-04-08 06:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-08 06:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-08 06:59:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feed/jolts.rss ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-08 06:59:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feed/jolts.rss ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-08 08:31:14 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'mongoadmin': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-08 08:31:14 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'mongoadmin': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-08 08:31:15 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'mongoadmin': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-08 08:31:15 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'mongoadmin': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-08 08:31:50 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-08 08:31:50 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-08 08:31:50 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-08 08:31:50 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-08 08:32:20 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-08 08:32:20 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-08 08:32:20 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-08 08:32:20 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-08 08:32:22 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-08 08:32:22 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-08 08:32:22 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-08 08:32:22 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-08 08:35:41 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-08 08:35:41 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-08 08:35:43 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-08 08:35:43 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(372): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#3 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-08 08:46:57 --- ERROR: MongoConnectionException [ 23 ]: The authMechanism 'SCRAM-SHA-1' does not exist. ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 92 ]
2024-04-08 08:46:57 --- STRACE: MongoConnectionException [ 23 ]: The authMechanism 'SCRAM-SHA-1' does not exist. ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 92 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(92): MongoClient->__construct('mongodb://52.20...', Array)
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(56): Kohana_MangoDB->__construct('default', Array)
#2 /var/www/html/application/classes/common_config.php(5): Kohana_MangoDB::instance('default')
#3 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#4 /var/www/html/index.php(107): require('/var/www/html/a...')
#5 {main}
2024-04-08 08:48:56 --- ERROR: MongoConnectionException [ 23 ]: The authMechanism 'SCRAM-SHA-1' does not exist. ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 92 ]
2024-04-08 08:48:56 --- STRACE: MongoConnectionException [ 23 ]: The authMechanism 'SCRAM-SHA-1' does not exist. ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 92 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(92): MongoClient->__construct('mongodb://52.20...', Array)
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(56): Kohana_MangoDB->__construct('default', Array)
#2 /var/www/html/application/classes/common_config.php(5): Kohana_MangoDB::instance('default')
#3 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#4 /var/www/html/index.php(107): require('/var/www/html/a...')
#5 {main}
2024-04-08 08:48:57 --- ERROR: MongoConnectionException [ 23 ]: The authMechanism 'SCRAM-SHA-1' does not exist. ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 92 ]
2024-04-08 08:48:57 --- STRACE: MongoConnectionException [ 23 ]: The authMechanism 'SCRAM-SHA-1' does not exist. ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 92 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(92): MongoClient->__construct('mongodb://52.20...', Array)
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(56): Kohana_MangoDB->__construct('default', Array)
#2 /var/www/html/application/classes/common_config.php(5): Kohana_MangoDB::instance('default')
#3 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#4 /var/www/html/index.php(107): require('/var/www/html/a...')
#5 {main}
2024-04-08 08:49:14 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-08 08:49:14 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(97): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(56): Kohana_MangoDB->__construct('default', Array)
#3 /var/www/html/application/classes/common_config.php(5): Kohana_MangoDB::instance('default')
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-08 08:50:14 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-08 08:50:14 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(97): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(56): Kohana_MangoDB->__construct('default', Array)
#3 /var/www/html/application/classes/common_config.php(5): Kohana_MangoDB::instance('default')
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-08 08:50:42 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-08 08:50:42 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(97): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(56): Kohana_MangoDB->__construct('default', Array)
#3 /var/www/html/application/classes/common_config.php(5): Kohana_MangoDB::instance('default')
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-08 08:51:42 --- ERROR: MongoConnectionException [ 23 ]: The authMechanism 'SCRAM-SHA-1' does not exist. ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 92 ]
2024-04-08 08:51:42 --- STRACE: MongoConnectionException [ 23 ]: The authMechanism 'SCRAM-SHA-1' does not exist. ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 92 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(92): MongoClient->__construct('mongodb://52.20...', Array)
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(56): Kohana_MangoDB->__construct('default', Array)
#2 /var/www/html/application/classes/common_config.php(5): Kohana_MangoDB::instance('default')
#3 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#4 /var/www/html/index.php(107): require('/var/www/html/a...')
#5 {main}
2024-04-08 08:52:04 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-08 08:52:04 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(97): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(56): Kohana_MangoDB->__construct('default', Array)
#3 /var/www/html/application/classes/common_config.php(5): Kohana_MangoDB::instance('default')
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-08 08:52:07 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-08 08:52:07 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(97): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(56): Kohana_MangoDB->__construct('default', Array)
#3 /var/www/html/application/classes/common_config.php(5): Kohana_MangoDB::instance('default')
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-08 08:52:08 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-08 08:52:08 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(97): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(56): Kohana_MangoDB->__construct('default', Array)
#3 /var/www/html/application/classes/common_config.php(5): Kohana_MangoDB::instance('default')
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-08 08:52:09 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-08 08:52:09 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(97): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(56): Kohana_MangoDB->__construct('default', Array)
#3 /var/www/html/application/classes/common_config.php(5): Kohana_MangoDB::instance('default')
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-08 08:52:11 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-08 08:52:11 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(97): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(56): Kohana_MangoDB->__construct('default', Array)
#3 /var/www/html/application/classes/common_config.php(5): Kohana_MangoDB::instance('default')
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-08 08:52:11 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-08 08:52:11 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(97): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(56): Kohana_MangoDB->__construct('default', Array)
#3 /var/www/html/application/classes/common_config.php(5): Kohana_MangoDB::instance('default')
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-08 08:52:12 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-08 08:52:12 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(97): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(56): Kohana_MangoDB->__construct('default', Array)
#3 /var/www/html/application/classes/common_config.php(5): Kohana_MangoDB::instance('default')
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-08 08:52:13 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-08 08:52:13 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.5:27122: Authentication failed on database 'connectinglimo' with username 'connectlimousr': auth failed ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(97): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(56): Kohana_MangoDB->__construct('default', Array)
#3 /var/www/html/application/classes/common_config.php(5): Kohana_MangoDB::instance('default')
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-08 08:56:20 --- ERROR: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.50:27122: Connection timed out ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
2024-04-08 08:56:20 --- STRACE: MongoConnectionException [ 71 ]: Failed to connect to: 52.206.20.50:27122: Connection timed out ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 116 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(116): MongoClient->connect()
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(97): Kohana_MangoDB->connect()
#2 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(56): Kohana_MangoDB->__construct('default', Array)
#3 /var/www/html/application/classes/common_config.php(5): Kohana_MangoDB::instance('default')
#4 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#5 /var/www/html/index.php(107): require('/var/www/html/a...')
#6 {main}
2024-04-08 09:09:56 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-04-08 09:09:56 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-04-08 11:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Temporary_Listen_Addresses was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-08 11:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Temporary_Listen_Addresses was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-08 11:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Pages/log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-08 11:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Pages/log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-08 11:56:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-08 11:56:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-08 12:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-08 12:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-08 12:33:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-08 12:33:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-08 12:47:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-08 12:47:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-08 14:49:06 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-04-08 14:49:06 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-04-08 15:05:57 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-04-08 15:05:57 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-04-08 15:55:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-08 15:55:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-08 16:25:18 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-04-08 16:25:18 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-04-08 16:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-08 16:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-08 17:08:20 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-04-08 17:08:20 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-04-08 17:54:20 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-04-08 17:54:20 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-04-08 18:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-08 18:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-08 18:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-08 18:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-08 19:09:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-08 19:09:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-08 19:45:18 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-04-08 19:45:18 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-04-08 20:27:16 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-04-08 20:27:16 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-04-08 21:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pub/time.series/overview.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-04-08 21:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pub/time.series/overview.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-04-08 21:53:34 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-04-08 21:53:34 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-04-08 21:53:58 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-04-08 21:53:58 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-04-08 23:13:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-04-08 23:13:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-08 23:17:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v0/id was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-04-08 23:17:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v0/id was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-04-08 23:20:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-04-08 23:20:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}