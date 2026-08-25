<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-03-26 00:33:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 00:33:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 01:17:52 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-03-26 01:17:52 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-03-26 01:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots1.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots1.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:36:47 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-03-26 01:36:47 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-03-26 01:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/resources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/resources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/python/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/python/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/db/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/db/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build_tool/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build_tool/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/cd/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/cd/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_configs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_configs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/processing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/processing/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_area/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/archived/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/archived/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/auth/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/auth/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_environment/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/current/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/current/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 01:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 01:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 02:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 02:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 02:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 02:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 02:09:27 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-03-26 02:09:27 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-03-26 02:17:11 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-03-26 02:17:11 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-03-26 02:30:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 02:30:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 02:53:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 02:53:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 03:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 03:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 03:57:13 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-03-26 03:57:13 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-03-26 04:00:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots1.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 04:00:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots1.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 04:46:33 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-03-26 04:46:33 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-03-26 05:04:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 05:04:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 05:39:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 05:39:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 05:44:42 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-03-26 05:44:42 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-03-26 06:31:45 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-03-26 06:31:45 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-03-26 07:04:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:20:27 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-03-26 07:20:27 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-03-26 07:30:14 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-26 07:30:14 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-26 07:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:34:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:34:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:35:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:35:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:36:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:36:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL FD873AC4-CF86-4FED-84EC-4BD59C6F17A7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 07:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL FD873AC4-CF86-4FED-84EC-4BD59C6F17A7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 07:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:45:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 07:45:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 07:51:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 07:51:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 08:15:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 08:15:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 08:16:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 08:16:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 08:51:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 08:51:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 08:51:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 08:51:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 09:13:11 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-03-26 09:13:11 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-03-26 09:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:16:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 09:16:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 09:16:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 09:16:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 09:16:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:16:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:16:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:16:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:16:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:16:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:16:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:16:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 09:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 09:49:38 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-26 09:49:38 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-26 10:02:10 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-03-26 10:02:10 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-03-26 10:05:10 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-03-26 10:05:10 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-03-26 10:52:12 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-03-26 10:52:12 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-03-26 11:02:41 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-26 11:02:41 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-26 11:39:04 --- ERROR: MongoCursorException [ 5739101 ]: 34.59.143.41:27020: OP_QUERY is no longer supported. The client driver may require an upgrade. For more details see https://dochub.mongodb.org/core/legacy-opcode-removal ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 423 ]
2025-03-26 11:39:04 --- STRACE: MongoCursorException [ 5739101 ]: 34.59.143.41:27020: OP_QUERY is no longer supported. The client driver may require an upgrade. For more details see https://dochub.mongodb.org/core/legacy-opcode-removal ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 423 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(423): MongoCollection->findOne(Array, Array)
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#2 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#3 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#4 /var/www/html/index.php(107): require('/var/www/html/a...')
#5 {main}
2025-03-26 11:39:05 --- ERROR: MongoCursorException [ 5739101 ]: 34.59.143.41:27020: OP_QUERY is no longer supported. The client driver may require an upgrade. For more details see https://dochub.mongodb.org/core/legacy-opcode-removal ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 423 ]
2025-03-26 11:39:05 --- STRACE: MongoCursorException [ 5739101 ]: 34.59.143.41:27020: OP_QUERY is no longer supported. The client driver may require an upgrade. For more details see https://dochub.mongodb.org/core/legacy-opcode-removal ~ MODPATH/mangodb/classes/kohana/mangodb.php [ 423 ]
--
#0 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(423): MongoCollection->findOne(Array, Array)
#1 /var/www/html/modules/mangodb/classes/kohana/mangodb.php(240): Kohana_MangoDB->_call('find_one', Array)
#2 /var/www/html/application/classes/common_config.php(7): Kohana_MangoDB->find_one('siteinfo', Array)
#3 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#4 /var/www/html/index.php(107): require('/var/www/html/a...')
#5 {main}
2025-03-26 12:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 12:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 12:19:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 12:19:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 12:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 12:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 13:52:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 13:52:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 13:52:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 13:52:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 14:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 14:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 14:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 14:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 14:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 14:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 14:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 14:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 14:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 14:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 14:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 14:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 14:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 14:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 14:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 14:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 14:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 14:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 14:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 14:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 14:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 14:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 14:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 14:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 14:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 14:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 14:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 14:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 14:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 14:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 14:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 14:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 14:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 14:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 14:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 14:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 14:06:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 14:06:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 14:06:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 14:06:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 14:06:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 14:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 14:06:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 14:06:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 14:07:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 14:07:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 14:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 14:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 14:07:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 14:07:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 14:07:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 14:07:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 14:32:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 14:32:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 14:54:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 14:54:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 14:55:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 14:55:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 15:00:41 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-03-26 15:00:41 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-03-26 15:06:53 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-26 15:06:53 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-26 15:45:18 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-03-26 15:45:18 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-03-26 16:32:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 16:32:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 16:33:06 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-03-26 16:33:06 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-03-26 16:35:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 16:35:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 16:35:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 16:35:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 16:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 16:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 17:31:03 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-03-26 17:31:03 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-03-26 17:46:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 17:46:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 17:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-protect/login.esp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 17:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-protect/login.esp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 18:15:39 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-03-26 18:15:39 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-03-26 18:20:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 18:20:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 18:20:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 18:20:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 18:20:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 18:20:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 18:20:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 18:20:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 18:20:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 18:20:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 18:20:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 18:20:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 18:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 18:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 18:20:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 18:20:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 18:20:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 18:20:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 18:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 18:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 18:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 18:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 18:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 18:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 18:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-protect/login.esp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 18:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-protect/login.esp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 18:26:53 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-26 18:26:53 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-26 19:10:23 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-03-26 19:10:23 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-03-26 19:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 19:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 20:09:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 20:09:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 20:10:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 20:10:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 20:26:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 20:26:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 20:26:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 20:26:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 20:30:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL FD873AC4-CF86-4FED-84EC-4BD59C6F17A7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 20:30:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL FD873AC4-CF86-4FED-84EC-4BD59C6F17A7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 20:59:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 20:59:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 20:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 20:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 20:59:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 20:59:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 20:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 20:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 20:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 20:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 20:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 20:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 20:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 20:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 20:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 20:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 20:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 20:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 20:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/Datavase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 20:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/Datavase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 20:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 20:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 20:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 20:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 20:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 20:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 20:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 20:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 20:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 20:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 20:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 20:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: external/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: external/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utility/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utility/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projects/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projects/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: migrations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: migrations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/migrations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/migrations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: documentation/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: documentation/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: models/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: models/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendors/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendors/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: authentication/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: authentication/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/system/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/system/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/system/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/system/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret/credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret/credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: certificate/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: certificate/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: certificates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: certificates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/certs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/certs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/certificates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/certificates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/ssl/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/ssl/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: builder/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: builder/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gitlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gitlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitbucket/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitbucket/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: git/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: git/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sbin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sbin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/share/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/share/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/share/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/share/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accounts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accounts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: members/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: members/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archives/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archives/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/archives/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/archives/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mariadb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mariadb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgresql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgresql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: memcached/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: memcached/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticsearch/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticsearch/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: solr/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: solr/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sphinx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sphinx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cassandra/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cassandra/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: couchdb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: couchdb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dynamodb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dynamodb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private-key/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private-key/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public-key/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public-key/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh/keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh/keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh/private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh/private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh/public/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh/public/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_dsa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_dsa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: authorized_keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: authorized_keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: known_hosts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: known_hosts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cert/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cert/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: certs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: certs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: report/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: report/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reports/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reports/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: statistics/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: statistics/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: analytics/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: analytics/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: metrics/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: metrics/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: telemetry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: telemetry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: event/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: event/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: process/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: process/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: processing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: processing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jobs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jobs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: job/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: job/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: schedule/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: schedule/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scheduler/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scheduler/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crontab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crontab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scheduled/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scheduled/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: task/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: task/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tasks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tasks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queues/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queues/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: worker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: worker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: message/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: message/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: messages/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: messages/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: notification/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: notification/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: notifications/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: notifications/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendmail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendmail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postfix/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postfix/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsletter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsletter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: subscription/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: subscription/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: subscriptions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: subscriptions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clients/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clients/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partner/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partner/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partners/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partners/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: affiliate/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: affiliate/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: affiliates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: affiliates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendors/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendors/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: supplier/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: supplier/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: suppliers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: suppliers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payments/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payments/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: billing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: billing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: invoice/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: invoice/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: invoices/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: invoices/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkout/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkout/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cart/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cart/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e-commerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e-commerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: commerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: commerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sales/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sales/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: merchandise/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: merchandise/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inventory/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inventory/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stock/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stock/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: warehouse/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: warehouse/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: order/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: order/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orders/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orders/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shipping/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shipping/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fulfillment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fulfillment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: delivery/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: delivery/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tracking/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tracking/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: review/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: review/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reviews/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reviews/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rating/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rating/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ratings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ratings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feedback/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feedback/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: survey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: survey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: surveys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: surveys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: message-board/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: message-board/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: messaging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: messaging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ticket/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ticket/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tickets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tickets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-desk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-desk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contacts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contacts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: faq/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: faq/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: knowledgebase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: knowledgebase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wiki/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wiki/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: search/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: search/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: find/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: find/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lookup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lookup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: query/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: query/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apidoc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apidoc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: documentation/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: documentation/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: specs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: specs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: design/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: design/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wireframe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wireframe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mockup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mockup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prototype/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prototype/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sample/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sample/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showcase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showcase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portfolio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portfolio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: company/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: company/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: corporate/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: corporate/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: privacy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: privacy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: policy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: policy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compliance/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compliance/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logout/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logout/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sign-in/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sign-in/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sign-out/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sign-out/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: signup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: signup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user-profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user-profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my-account/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my-account/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my-profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my-profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preferences/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preferences/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: options/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: options/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-area/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-area/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cpanel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cpanel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admincp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admincp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: management/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: management/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webmaster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webmaster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: supervisor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: supervisor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moderator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moderator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mods/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mods/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webmaster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webmaster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/queue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/queue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/session/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/session/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/system/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/system/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/security/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/security/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/global/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/global/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/testing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/testing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ci/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ci/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/azure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/azure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mobile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mobile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/desktop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/desktop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/framework/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/framework/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ecommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ecommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/store/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/store/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/payment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/payment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/analytics/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/analytics/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/email/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/email/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/social/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/social/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/account/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/account/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/security/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/security/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/management/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/management/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/console/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/console/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/admin-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/admin-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/admin-area/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/admin-area/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/admin-dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/admin-dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/control-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/control-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp-includes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp-includes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/drupal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/drupal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/joomla/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/joomla/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/magento/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/magento/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/opencart/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/opencart/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prestashop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prestashop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/shopify/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/shopify/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/woocommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/woocommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sitecore/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sitecore/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/umbraco/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/umbraco/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/typo3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/typo3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/codeigniter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/codeigniter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cakephp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cakephp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/zend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/zend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/yii/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/yii/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/django/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/django/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/flask/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/flask/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/rails/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/rails/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/express/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/express/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/angular/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/angular/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ember/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ember/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/meteor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/meteor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gatsby/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gatsby/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/next/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/next/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/nuxt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/nuxt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/svelte/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/svelte/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backbone/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backbone/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/knockout/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/knockout/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/jquery/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/jquery/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/foundation/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/foundation/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tailwind/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tailwind/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/bulma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/bulma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sass/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sass/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/less/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/less/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stylus/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stylus/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/postcss/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/postcss/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/webpack/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/webpack/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gulp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gulp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/grunt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/grunt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/babel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/babel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/typescript/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/typescript/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/eslint/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/eslint/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prettier/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prettier/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/jest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/jest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mocha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mocha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/chai/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/chai/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/karma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/karma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/jasmine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/jasmine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cypress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cypress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/selenium/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/selenium/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/protractor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/protractor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/puppeteer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/puppeteer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/helm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/helm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/terraform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/terraform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ansible/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ansible/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/chef/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/chef/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/puppet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/puppet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/salt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/salt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/nginx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/nginx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/apache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/apache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/traefik/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/traefik/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/haproxy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/haproxy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/varnish/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/varnish/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:08:01 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-26 21:08:01 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-26 21:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:47:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:47:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:47:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 21:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 21:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 22:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 22:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 22:30:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.prettyphoto.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 22:30:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.prettyphoto.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 22:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intltelinput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 22:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intltelinput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 23:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 23:14:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:14:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:22:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 23:22:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 23:23:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mappings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:23:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mappings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:23:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 23:23:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 23:23:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:23:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.development.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.development.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.production.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.production.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL message-api/actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 23:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL message-api/actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 23:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL message-api/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 23:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL message-api/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 23:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/base.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/base.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/lib/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/lib/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/configuration.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/configuration.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/services.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/services.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/messages_manager.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/messages_manager.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.5.1.1.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.5.1.1.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reports.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reports.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 23:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 23:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/mappings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 23:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/mappings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 23:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 23:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 23:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-03-26 23:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 23:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-03-26 23:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 23:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/actuator/;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/actuator/;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 23:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 23:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL management/mappings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 23:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL management/mappings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 23:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL management/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 23:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL management/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 23:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: management/;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: management/;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dev/actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 23:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dev/actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 23:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dev/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 23:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dev/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 23:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 23:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 23:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 23:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 23:35:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 23:35:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-03-26 23:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-03-26 23:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-03-26 23:44:37 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-03-26 23:44:37 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-03-26 23:51:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-03-26 23:51:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}