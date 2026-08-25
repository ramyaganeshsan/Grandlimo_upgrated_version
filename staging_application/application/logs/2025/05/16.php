<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-05-16 00:16:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 00:16:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 00:20:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 00:20:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 00:20:51 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-05-16 00:20:51 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-05-16 00:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 00:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 00:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 00:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 00:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 00:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 01:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 01:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 01:30:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 01:30:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-05-16 02:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 02:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/install.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/install.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/configuration.php-dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/configuration.php-dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitrix/php_interface/dbconn.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitrix/php_interface/dbconn.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: typo3conf/localconf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: typo3conf/localconf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL storage/framework/sessions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 02:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL storage/framework/sessions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 02:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL storage/framework/cache was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 02:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL storage/framework/cache was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 02:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL storage/framework/views was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 02:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL storage/framework/views was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 02:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nova-api/styles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 02:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nova-api/styles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 02:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/logs/dev.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/logs/dev.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/logs/prod.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/logs/prod.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:26 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-05-16 02:02:26 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 02:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sites/all/modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 02:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sites/all/modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 02:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sites/all/themes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 02:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sites/all/themes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 02:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/install.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/install.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CHANGELOG.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CHANGELOG.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/system.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/system.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/exception.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/exception.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 02:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 02:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 02:02:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 02:02:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 02:02:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 02:02:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: openapi.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: openapi.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:02:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:02:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 02:26:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 02:26:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 02:58:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 02:58:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 03:07:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 03:07:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 03:07:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 03:07:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 03:23:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 03:23:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 03:23:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 03:23:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 03:23:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 03:23:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 03:23:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 03:23:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 03:23:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 03:23:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 03:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 03:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 03:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 03:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 03:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 03:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 03:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 03:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 03:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 03:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 03:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 03:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 03:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 03:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 03:23:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 03:23:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 04:07:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:07:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:07:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 04:12:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 04:12:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 04:16:38 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-05-16 04:16:38 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-05-16 04:38:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 04:38:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:41:06 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-05-16 05:41:06 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-05-16 05:46:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 05:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 05:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 06:24:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1/models was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 06:24:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1/models was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 06:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 06:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 06:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 06:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 06:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 06:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 06:37:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 06:37:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 07:04:59 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-05-16 07:04:59 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-05-16 07:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Autodiscover/Autodiscover.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 07:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Autodiscover/Autodiscover.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 07:28:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 07:28:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 07:46:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 07:46:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 07:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 07:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:00:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 08:00:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 08:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:10:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recordings/theme/main.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:10:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recordings/theme/main.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:19:08 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-05-16 08:19:08 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-05-16 08:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 08:21:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 08:21:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 08:45:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 08:45:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 09:07:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 09:07:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 09:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 09:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 09:19:20 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-05-16 09:19:20 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-05-16 09:55:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 09:55:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 10:19:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:19:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:19:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:19:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:19:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:19:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:19:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:19:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:19:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:19:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:19:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:19:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:19:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:19:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:19:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:19:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:19:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:19:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:19:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:19:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:19:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:19:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:19:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:19:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:20:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:20:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:20:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:20:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:20:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:20:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:20:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:20:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:20:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:20:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:20:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:20:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:20:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:20:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:20:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:20:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:20:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:20:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:20:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:20:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:20:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:20:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 10:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 10:48:49 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-05-16 10:48:49 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-05-16 11:25:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 11:25:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 11:25:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 11:25:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 11:25:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 11:25:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 11:25:15 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2025-05-16 11:25:15 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-05-16 11:25:15 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2025-05-16 11:25:15 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-05-16 11:25:15 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2025-05-16 11:25:15 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-05-16 11:25:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2025-05-16 11:25:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2025-05-16 11:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i18n/en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i18n/en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/controller/website.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/controller/website.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/controller/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/controller/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i18n/en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i18n/en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/controller/find.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/controller/find.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2025-05-16 11:25:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2025-05-16 11:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/kohana/view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/kohana/view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/kohana/view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/kohana/view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/always was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 11:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/always was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 11:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/video/quicktime was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 11:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/video/quicktime was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 11:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/cms.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/cms.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/{autoplay} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 11:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/{autoplay} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 11:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/accordion.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/accordion.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/tooltip.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/tooltip.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/tabs.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/tabs.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/spinner.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/spinner.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/slider.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/sortable.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/slider.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/sortable.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/selectmenu.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/selectmenu.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/progressbar.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/progressbar.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/selectable.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/selectable.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/dialog.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/dialog.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/resizable.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/resizable.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/draggable.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/draggable.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/datepicker.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/datepicker.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/controlgroup.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/controlgroup.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/button.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/button.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/checkboxradio.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/checkboxradio.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/autocomplete.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/autocomplete.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/menu.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/menu.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/core.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/core.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/theme.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/base/theme.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/classes/controller/users.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/classes/controller/users.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/controller/users.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/controller/users.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/{wmode} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/{wmode} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/true was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/true was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/{path} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/{path} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/"+img_src+" was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/"+img_src+" was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/managemodel.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/managemodel.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/emailtemplate.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/emailtemplate.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/site.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/site.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/authorize.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/authorize.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/passengers.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/passengers.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/commonmodel.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/commonmodel.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/driver.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/driver.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/siteusers.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/siteusers.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/kohana/model.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/kohana/model.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/license.generator.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/license.generator.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/license.library.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/license.library.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/license.application.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/license.application.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/session.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/session.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/kohana/session/native.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/kohana/session/native.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/session/native.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/session/native.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/kohana/session.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/kohana/session.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/kohana/controller.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/session.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/kohana/controller.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/session.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/kohana/controller/template.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/kohana/controller/template.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/controller.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/controller.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/controller/template.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/controller/template.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/classes/controller/passengers.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/classes/controller/passengers.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/views/themes/default/template.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/views/themes/default/template.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/controller/passengers.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/controller/passengers.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
2025-05-16 11:25:17 --- STRACE: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2025-05-16 11:25:17 --- ERROR: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
2025-05-16 11:25:17 --- STRACE: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
--
#0 /var/www/html/application/classes/controller/company.php(959): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 959, Array)
#1 [internal function]: Controller_Company->action_getfreetrial()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Company))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 11:25:17 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
2025-05-16 11:25:17 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2025-05-16 11:25:17 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
2025-05-16 11:25:17 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2025-05-16 11:25:17 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2025-05-16 11:25:17 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/taxidispatch.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/taxidispatch.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/mobileapi120.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/mobileapi120.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/font/helevitica was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/font/helevitica was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/classes/controller/company.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/classes/controller/company.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/font/HelveticaNeu100 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/font/HelveticaNeu100 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/views/admin/template.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/application/views/admin/template.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: necolas/normalize.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: necolas/normalize.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/manage.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/manage.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/edit.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/edit.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/transaction.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/transaction.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/add.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/add.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/controller/siteadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/controller/siteadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/controller/company.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/controller/company.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/company.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/model/company.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/scroll_jquery.fullPage.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/scroll_jquery.fullPage.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/animate.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/animate.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-05-16 11:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 11:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Moment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Moment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/iScroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/iScroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Moment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Moment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/iScroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/iScroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Moment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Moment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/iScroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/iScroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Moment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Moment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/iScroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/iScroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Moment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Moment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/iScroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/iScroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Moment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Moment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/iScroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/iScroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Moment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Moment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/iScroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/iScroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Moment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Moment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/iScroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/iScroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dialog.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controlgroup.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: datepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkboxradio.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autocomplete.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: button.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accordion.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: draggable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: droppable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-blind.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-clip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-bounce.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-drop.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-puff.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fold.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-explode.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-highlight.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-fade.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-pulsate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-scale.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-shake.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-slide.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-size.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: effect-transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mouse.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: progressbar.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/WOW.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Moment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Moment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/Fullpage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/iScroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/iScroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resizable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_bootstrap-datetimepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.fullPage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_jquery.custom.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_owl.carousel.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scroll_moment.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selectmenu.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: slider.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tabs.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sortable.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 11:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 11:34:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 11:34:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 12:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:05:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:05:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:05:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:05:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:05:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:05:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:05:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:05:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:05:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:05:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:05:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:05:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:06:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:06:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:06:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:06:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:06:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:06:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:06:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:06:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:06:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:06:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:06:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:06:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:06:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:06:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:06:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:06:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:06:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:06:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:06:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:06:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:06:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:06:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:06:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:16:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _ignition/execute-solution was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 12:16:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _ignition/execute-solution was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 12:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:58:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:58:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:58:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:58:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:58:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:58:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:58:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:58:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:58:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:58:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:58:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:58:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 12:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 12:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 13:27:28 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-05-16 13:27:28 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-05-16 13:53:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 13:53:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 14:14:35 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-05-16 14:14:35 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-05-16 14:20:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 14:20:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 15:21:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 15:21:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 15:23:07 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-05-16 15:23:07 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-05-16 15:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/x.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 15:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/x.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 16:45:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 16:45:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 18:03:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 18:03:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 19:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 19:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 19:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pubic/images/5a54c58fab735images.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 19:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pubic/images/5a54c58fab735images.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 19:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 19:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 19:15:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/driver_image/5a54be6bcb192download (1).jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 19:15:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/driver_image/5a54be6bcb192download (1).jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 19:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/driver_image/5a54be6bcb192download (1).jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 19:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/driver_image/5a54be6bcb192download (1).jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 19:18:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pubic/images was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 19:18:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pubic/images was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 19:19:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pubic/images/taxi_image/5a54c58fab735images.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 19:19:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pubic/images/taxi_image/5a54c58fab735images.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 20:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 20:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 20:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 20:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 20:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Autodiscover/Autodiscover.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 20:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Autodiscover/Autodiscover.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 20:37:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 20:37:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 20:37:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 20:37:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 20:37:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 20:37:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 20:37:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 20:37:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 20:37:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 20:37:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 20:37:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 20:37:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 20:37:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 20:37:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 20:37:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 20:37:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 20:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 20:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 20:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 20:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 20:52:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pubic/images/taxi_image/5a54c58fab735images.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 20:52:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pubic/images/taxi_image/5a54c58fab735images.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 21:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 21:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 21:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/home/js/check.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 21:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/home/js/check.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 21:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/admin/javascript/hetong.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 21:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/admin/javascript/hetong.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 22:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recordings/theme/main.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 22:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recordings/theme/main.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-05-16 23:12:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 23:12:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 23:34:17 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-05-16 23:34:17 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-05-16 23:41:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 23:41:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 23:41:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 23:41:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 23:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _ignition/execute-solution was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-05-16 23:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _ignition/execute-solution was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-05-16 23:47:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-05-16 23:47:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}