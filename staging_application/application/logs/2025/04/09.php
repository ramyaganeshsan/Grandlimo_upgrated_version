<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-04-09 00:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 00:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 00:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 00:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 01:07:50 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-09 01:07:50 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-09 02:24:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:24:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:25:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:25:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings/auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings/auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/user/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/user/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/external_auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/external_auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/api.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/api.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/github.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/github.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/facebook_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/facebook_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/auth_settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/auth_settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/oauth.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/oauth.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/src/app/auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/src/app/auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/azure_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/azure_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/keys.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/keys.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/security.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/security.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/token_store.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/token_store.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/config/test_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/config/test_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/auth/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/auth/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/config/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/config/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.d/oauth.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.d/oauth.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/service_auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/service_auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/server_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/server_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/integration_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/integration_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/twitter_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/twitter_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/auth_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/auth_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: automation/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: automation/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/base.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/base.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/app/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/app/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/prod/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/prod/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/auth_settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/auth_settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/auth/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/auth/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/api_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/api_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/secrets/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/secrets/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: microservices/oauth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: microservices/oauth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/oauth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/oauth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/provider_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/provider_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/base.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/base.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/dev/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/dev/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/oauth_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/oauth_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/api_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/api_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/service_keys.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/service_keys.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/api_settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/api_settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/api/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/api/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/google.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/google.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth_override.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth_override.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/integration.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/integration.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/client_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/client_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/okta_oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/okta_oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/auth_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/auth_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 02:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/microsoft.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 02:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/microsoft.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 03:07:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 03:07:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 03:17:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 03:17:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 03:21:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 03:21:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 03:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 03:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 03:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 03:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 03:51:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 03:51:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 03:51:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 03:51:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 04:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/modules/framework/amp_conf/htdocs/admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 04:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/modules/framework/amp_conf/htdocs/admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 04:19:51 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-09 04:19:51 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-09 04:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 04:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 04:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 04:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 05:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/drupal/coder/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/drupal/coder/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/modules/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/modules/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accounts/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accounts/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 05:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 05:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 06:47:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 06:47:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 07:25:04 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-09 07:25:04 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-09 07:32:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 07:32:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 07:34:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 07:34:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 07:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 07:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 07:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 07:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 07:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 07:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 07:40:53 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-09 07:40:53 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-09 07:58:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 07:58:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 08:30:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/base.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:30:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/base.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:30:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/keys.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:30:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/keys.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:30:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/service_auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:30:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/service_auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:30:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:30:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:30:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/token_store.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:30:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/token_store.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:30:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:30:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth_override.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth_override.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/config/test_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/config/test_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/auth/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/auth/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/external_auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/external_auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/oauth.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/oauth.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/auth_settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/auth_settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/service_keys.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/service_keys.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/twitter_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/twitter_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/user/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/user/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/github.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/github.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.d/oauth.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.d/oauth.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/security.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/security.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/oauth_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/oauth_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/base.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/base.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/okta_oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/okta_oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/azure_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/azure_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/provider_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/provider_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/secrets/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/secrets/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/src/app/auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/src/app/auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/integration_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/integration_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/auth_settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/auth_settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/google.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/google.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: automation/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: automation/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/integration.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/integration.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/dev/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/dev/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/config/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/config/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/oauth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/oauth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/api/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/api/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/auth/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/auth/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/api_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/api_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/server_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/server_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/api_settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/api_settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/microsoft.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/microsoft.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/auth_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/auth_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings/auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings/auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/client_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/client_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/api.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/api.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/app/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/app/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/auth_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/auth_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/api_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/api_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/prod/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/prod/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: microservices/oauth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: microservices/oauth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/facebook_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/facebook_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 08:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 08:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 09:18:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 09:18:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 10:08:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 10:08:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 10:09:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 10:09:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 10:18:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 10:18:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 11:19:00 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-09 11:19:00 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-09 11:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 11:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 11:46:48 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-09 11:46:48 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-09 13:23:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 13:23:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 13:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 13:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 14:24:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:24:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:24:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:24:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:25:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:25:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:32:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:32:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 14:32:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 14:32:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 15:11:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 15:11:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 15:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 15:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 15:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 15:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 15:31:58 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-09 15:31:58 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-09 15:49:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 15:49:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 15:51:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 15:51:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 15:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 15:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:07:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 16:07:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 16:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 16:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 16:26:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libraries/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libraries/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projects/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projects/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: styles/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: styles/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: maintenance/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: maintenance/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: misc/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: misc/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: platform/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: platform/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resource/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resource/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: migrations/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: migrations/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobile/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobile/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partners/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partners/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:26:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:26:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 16:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 16:51:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 16:51:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 16:53:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 16:53:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 17:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 17:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 17:45:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 17:45:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 18:06:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 18:06:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 19:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 19:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 19:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-protect/prelogin.esp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 19:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-protect/prelogin.esp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 20:31:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-protect/prelogin.esp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 20:31:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-protect/prelogin.esp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 20:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 20:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:12:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:12:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:21 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-09 21:59:21 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-09 21:59:28 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-09 21:59:28 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-09 21:59:28 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-09 21:59:28 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-09 21:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1744225168 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1744225168 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Cmy3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Cmy3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:30 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-09 21:59:30 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-09 21:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: confluence/rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: confluence/rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 5xz5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 5xz5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1744225168 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1744225168 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dniapi/userInfos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dniapi/userInfos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-04-09 21:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: confluence/rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: confluence/rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dniapi/userInfos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dniapi/userInfos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 21:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-04-09 21:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 21:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 21:59:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 21:59:39 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-09 21:59:39 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-09 21:59:40 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-09 21:59:40 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-09 22:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 22:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 22:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 22:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 22:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 22:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 22:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-09 22:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-09 22:25:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 22:25:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 23:02:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dqgqoeCXckuwPtxov was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 23:02:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dqgqoeCXckuwPtxov was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 23:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dqgqoeCXckuwPtxov was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 23:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dqgqoeCXckuwPtxov was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 23:21:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 23:21:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 23:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 23:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 23:24:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 23:24:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-09 23:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-09 23:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}