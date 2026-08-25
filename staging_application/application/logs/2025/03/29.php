<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-03-29 00:25:28 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-29 00:25:28 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-29 00:31:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 00:31:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 00:32:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 00:32:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 00:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 00:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 00:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 00:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 00:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 00:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 00:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 00:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 00:55:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vpn/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 00:55:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vpn/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 00:55:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vpn/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 00:55:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vpn/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 01:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 01:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_configs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_configs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/current/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/current/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/auth/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/auth/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/archived/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/archived/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/python/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/python/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/cd/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/cd/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/processing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/processing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/resources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/resources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/db/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/db/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build_tool/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build_tool/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 01:52:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 01:52:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 01:53:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 01:53:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 02:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 02:09:07 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-29 02:09:07 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-29 02:15:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:15:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:15:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:15:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:15:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:15:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:15:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:15:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:15:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:15:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:15:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:15:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:15:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:15:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:15:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:15:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:15:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:15:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:15:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:15:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:15:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:15:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:15:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:15:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:15:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:15:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:15:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:15:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:15:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:15:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:15:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:15:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:16:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:16:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:16:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:16:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:16:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:16:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:16:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:16:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:16:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:16:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:16:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:16:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:16:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:16:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:16:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/resources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/resources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/processing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/processing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/auth/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/auth/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_configs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_configs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/cd/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/cd/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/db/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/db/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/python/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/python/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/archived/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/archived/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build_tool/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build_tool/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/current/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/current/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:45:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 02:45:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 02:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 02:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 03:08:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 03:08:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 03:08:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 03:08:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 03:51:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 03:51:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 03:52:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 03:52:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 05:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 05:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 05:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 05:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 05:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 05:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/email_service.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/email_service.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env_example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env_example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/nodemailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/nodemailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.141b0494.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.141b0494.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/2.ca066a4b.chunk.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/2.ca066a4b.chunk.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.e85f7a37.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.e85f7a37.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 05:02:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 05:02:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: karma.conf.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: karma.conf.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gatsby-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gatsby-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/default.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/default.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controllers/merchant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controllers/merchant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controllers/partner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controllers/partner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/objects/codes.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/objects/codes.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/controllers/users.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/controllers/users.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/Scraper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/Scraper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/storage.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/storage.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/routes.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/routes.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/s3_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/s3_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/admin/post.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/admin/post.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/api/post.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/api/post.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: getcpuutil.php-bakworking ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: getcpuutil.php-bakworking ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/EmailHelper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/EmailHelper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/chakaash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/chakaash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/newsletter.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/newsletter.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/palash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/palash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mytest/astech_robot.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mytest/astech_robot.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partner/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partner/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/controllers/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/controllers/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-03-29 05:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 05:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sms.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sms.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/utility.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/utility.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 05:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 05:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 05:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 05:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 05:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 05:10:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 05:10:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 05:10:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 05:10:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 06:13:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 06:13:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 06:22:18 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-29 06:22:18 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-29 07:24:00 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-29 07:24:00 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-29 07:26:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 07:26:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 07:26:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 07:26:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 07:26:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 07:26:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 07:27:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 07:27:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 07:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 07:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 07:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 07:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:25:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:25:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/python/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/python/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/auth/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/auth/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build_tool/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build_tool/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:40:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/resources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:40:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/resources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/cd/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/cd/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_configs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_configs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/processing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/processing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/db/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/db/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/archived/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/archived/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/current/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/current/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 08:41:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 08:41:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 12:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 12:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 13:51:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 13:51:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 13:51:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 13:51:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 13:51:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 13:51:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 13:51:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 13:51:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 13:51:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 13:51:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 13:51:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 13:51:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 14:10:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 14:10:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 14:31:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-protect/login.esp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 14:31:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-protect/login.esp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 14:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 14:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 14:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 14:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 16:21:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 16:21:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 16:22:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 16:22:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 16:42:38 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-29 16:42:38 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-29 16:58:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 16:58:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 16:58:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mappings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 16:58:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mappings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 16:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 16:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 16:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 16:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 16:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 16:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 16:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.development.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 16:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.development.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 16:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.production.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 16:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.production.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 16:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 16:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 16:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 16:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 16:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL message-api/actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 16:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL message-api/actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 16:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL message-api/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 16:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL message-api/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 16:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 16:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 16:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 16:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 16:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/base.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 16:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/base.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 16:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/lib/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 16:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/lib/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 16:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/configuration.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 16:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/configuration.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 16:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/services.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 16:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/services.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 16:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/messages_manager.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 16:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/messages_manager.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 16:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.5.1.1.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 16:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.5.1.1.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 16:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 16:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 16:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reports.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 16:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reports.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 16:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 16:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 16:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/mappings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 16:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/mappings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 16:58:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 16:58:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 16:58:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 16:58:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 16:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-03-29 16:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 16:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-03-29 16:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 16:58:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/actuator/;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 16:58:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/actuator/;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 16:58:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 16:58:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 16:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL management/mappings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 16:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL management/mappings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 16:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL management/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 16:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL management/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 16:58:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: management/;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 16:58:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: management/;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 16:58:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dev/actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 16:58:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dev/actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 16:58:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dev/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 16:58:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dev/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 16:58:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 16:58:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 16:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 16:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 17:08:36 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-29 17:08:36 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-29 17:25:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 17:25:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 17:46:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 17:46:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 17:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 17:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 18:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 18:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 18:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 18:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 18:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 18:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:04:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:04:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:04:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:04:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:34:58 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-29 19:34:58 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-29 19:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_configs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_configs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:58:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:58:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:58:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:58:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:58:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:58:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/db/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/db/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/current/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/current/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build_tool/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build_tool/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 19:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 19:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/processing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/processing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/auth/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/auth/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/cd/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/cd/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/archived/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/archived/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/resources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/resources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/python/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/python/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:00:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:00:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:01:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:01:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 20:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 20:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:42:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:42:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 21:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 21:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:14:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-29 23:14:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-29 23:23:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:23:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:23:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:23:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:23:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:23:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:23:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:23:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:23:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:23:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:23:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:23:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/archived/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/archived/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/current/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/current/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:24:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_configs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:24:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_configs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/resources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/resources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/cd/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/cd/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/processing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/processing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/python/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/python/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build_tool/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build_tool/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:26:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:26:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:26:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:26:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:26:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/auth/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:26:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/auth/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:26:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:26:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:26:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:26:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:26:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:26:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:26:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:26:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:26:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:26:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:26:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/db/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:26:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/db/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:26:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:26:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:26:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:26:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:26:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:26:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-29 23:26:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-29 23:26:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}