<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2024-10-06 01:17:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 01:17:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 01:17:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 01:17:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 01:17:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 01:17:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/pMA/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 01:17:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 01:17:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 01:17:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/portable-phpmyadmin/wp-pma-mod/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 01:17:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/portable-phpmyadmin/wp-pma-mod/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 02:37:04 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-10-06 02:37:04 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-10-06 03:24:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 03:24:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 03:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 03:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:30:07 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-10-06 04:30:07 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-10-06 04:34:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __tests__/test-become/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __tests__/test-become/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3-sequelize/final/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3-sequelize/final/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 07-accessing-data/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 07-accessing-data/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 07-accessing-data/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 07-accessing-data/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 08-routing/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 08-routing/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 08-routing/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 08-routing/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/begin/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09-managing-state/end/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 31_structure_tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 31_structure_tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme_challenges/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme_challenges/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme-challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme-challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actions-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actions-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agora/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agora/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: anaconda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: anaconda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_nginx_static_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_nginx_static_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-order-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-order-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/code/community/Nosto/Tagging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/code/community/Nosto/Tagging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app1-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app1-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app2-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app2-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Archipel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Archipel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset_img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset_img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Assignment3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Assignment3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Assignment4/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Assignment4/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/as-alias/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/as-alias/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/dev-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/dev-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/empty-values/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/empty-values/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/filename/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/filename/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/override-value/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/override-value/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/prod-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel-plugin-dotenv/test/fixtures/prod-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-end/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-end/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backendfinaltest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backendfinaltest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: basic-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: basic-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:34:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bgoldd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:34:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bgoldd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitcoind/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitcoind/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blankon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blankon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blob/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blob/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bookchain-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bookchain-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/Kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/Kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/OLCNE/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boxes/oracle-vagrant-boxes/OLCNE/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucoffea/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucoffea/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cardea/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cardea/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdw-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdw-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch2-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch2-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch6a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch7-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch7-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch7a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch7a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8a-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8b-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ch8b-mytodo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Chai/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Chai/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenges/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenges/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/liveObjects/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/liveObjects/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chiminey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chiminey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/mutual-fund-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/mutual-fund-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd/testdata/expected/dot_env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clld_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd/testdata/expected/dot_env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clld_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CodeGolf.Web/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CodeGolf.Web/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codenames-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codenames-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collab-connect-web-application/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collab-connect-web-application/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collected_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collected_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/Datavase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/Datavase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/src/main/resources/org/jobrunr/dashboard/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/src/main/resources/org/jobrunr/dashboard/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterblockd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterblockd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterwallet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterwallet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cryo_project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cryo_project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: delivery/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: delivery/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developerslv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developerslv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: directories/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: directories/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:35:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:35:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_project_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_project_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django-blog/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django-blog/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose/platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose/platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-elk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-elk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-network-healthcheck/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-network-healthcheck/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-node-mongo-redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-node-mongo-redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withMongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withMongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withPostgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withPostgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/examples/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/examples/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/postgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/postgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/webdav/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/webdav/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dodoswap-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dodoswap-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: downloads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: downloads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e2e/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e2e/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: engine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: engine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/dockers/mariadb-test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/dockers/mariadb-test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/dockers/php-apache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/dockers/php-apache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: errors/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: errors/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example02-golang-package/import-underscore/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example02-golang-package/import-underscore/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example27-how-to-load-env/sample01/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example27-how-to-load-env/sample01/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example27-how-to-load-env/sample02/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example27-how-to-load-env/sample02/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/01-simple-model/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/01-simple-model/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/02-complex-example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/02-complex-example/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/03-one-to-many-relationship/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/03-one-to-many-relationship/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/04-many-to-many-relationship/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/04-many-to-many-relationship/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/05-migrations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/05-migrations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/06-base-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/06-base-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/07-feature-flags/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/07-feature-flags/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/08-performance/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/08-performance/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/09-production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/09-production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/10-subscriptions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/10-subscriptions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/11-transactions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/11-transactions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/drupal-separate-services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/drupal-separate-services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/react-dashboard/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/react-dashboard/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/sdl-first/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/sdl-first/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/sdl-first/prisma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/sdl-first/prisma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/vue-dashboard/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/vue-dashboard/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-cookie-auth-fauna/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-cookie-auth-fauna/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-dotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-dotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-firebase-authentication-serverless/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-firebase-authentication-serverless/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-react-relay-network-modern/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-react-relay-network-modern/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-relay-modern/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-relay-modern/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-universal-configuration-build-time/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/with-universal-configuration-build-time/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Exercise.Frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Exercise.Frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Exercise.Frontend/train/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Exercise.Frontend/train/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastlane/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastlane/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicons/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicons/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FE/huey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FE/huey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fedex/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fedex/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fhir-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fhir-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fileserver/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fileserver/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: films/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: films/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/Airflow_Dag/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/Airflow_Dag/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/kafka_twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/kafka_twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/StartingFile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Final_Project/StartingFile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: finalVersion/lcomernbootcamp/projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: finalVersion/lcomernbootcamp/projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: first-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: first-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fisdom/fisdom/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fisdom/fisdom/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/blocks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/blocks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/fiber-debugger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/fiber-debugger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/kitchensink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/flight/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/kitchensink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/flight/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_test_uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_test_uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: font-icons/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: font-icons/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fonts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fonts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-empathy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-empathy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:36:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:36:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/momentum-fe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/momentum-fe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontendfinaltest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontendfinaltest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftpmaster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftpmaster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gists/cache was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 04:37:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gists/cache was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 04:37:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gists/laravel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 04:37:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gists/laravel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 04:37:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gists/pusher was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 04:37:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gists/pusher was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 04:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github-connect/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github-connect/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grems-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grems-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grems-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grems-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Hash/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Hash/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hasura/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hasura/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Helmetjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Helmetjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hgs-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hgs-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: higlass-website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: higlass-website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: horde/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: horde/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotpot-app-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotpot-app-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpboot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpboot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: HUNIV_migration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: HUNIV_migration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ikiwiki/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ikiwiki/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image_data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image_data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Imagebord/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Imagebord/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: InstantCV/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: InstantCV/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: items/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: items/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsrelay/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsrelay/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jupyter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jupyter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khanlinks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: khanlinks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kibana/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kibana/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kodenames-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kodenames-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kolab-syncroton/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kolab-syncroton/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: latest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: latest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layout/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layout/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lcomernbootcamp/projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lcomernbootcamp/projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: leafer-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: leafer-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ledger_sync/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ledger_sync/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.1.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.1.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.2.0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.2.0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-fr-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-fr-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: letsencrypt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: letsencrypt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linux/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linux/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailinabox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailinabox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailman/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailman/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main_user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main_user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: memcached/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: memcached/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mentorg-lava-docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mentorg-lava-docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: micro-app-react-communication/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: micro-app-react-communication/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: micro-app-react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: micro-app-react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mindsweeper/gui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mindsweeper/gui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: minified/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: minified/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: misc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: misc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Modix/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Modix/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monerod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monerod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitoring/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitoring/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moodledata/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moodledata/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: msks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: msks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: munki_repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: munki_repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:37:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: music/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:37:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: music/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyRentals.Web/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyRentals.Web/ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: name/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: name/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new-js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new-js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: niffler-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: niffler-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nodejs-Projects/play-ground/login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nodejs-Projects/play-ground/login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nodejs-Projects/play-ground/ManageUserRoles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nodejs-Projects/play-ground/ManageUserRoles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: noVNC/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: noVNC/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nuke.App.Ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Nuke.App.Ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oldsanta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oldsanta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ops/vagrant/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ops/vagrant/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: option/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: option/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orientdb-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orientdb-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: outputs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: outputs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-analytics/src/fixtures/analytics-ga-key/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-analytics/src/fixtures/analytics-ga-key/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/app3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-qiankun/examples/master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/react-scripts/fixtures/kitchensink/template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/react-scripts/fixtures/kitchensink/template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/styled-ui-docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/styled-ui-docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packed/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packed/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: page-editor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: page-editor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parity/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parity/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Passportjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Passportjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patchwork/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patchwork/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pfbe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pfbe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pictures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pictures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playground/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playground/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post-deployment/.vscode/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post-deployment/.vscode/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postfixadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postfixadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: price_hawk_client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: price_hawk_client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prisma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prisma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: processor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: processor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: psnlink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: psnlink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pt2/countries/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pt2/countries/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pt8/library-backend-gql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pt8/library-backend-gql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pub/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pub/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: question2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: question2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qv-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qv-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq-cluster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq-cluster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails-api/react-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails-api/react-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rasax/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rasax/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react_todo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react_todo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redmine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redmine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/phpmyadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/phpmyadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/rabbitmq/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/rabbitmq/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/rediscommander/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/rediscommander/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resourcesync/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resourcesync/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: results/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: results/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rosterBack/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rosterBack/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcube/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcube/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcubemail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcubemail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: run/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: run/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-backend/dao/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rust-backend/dao/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s-with-me-front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s-with-me-front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/chatroom/chatroom-spa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/chatroom/chatroom-spa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/docker/deploymentscripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/docker/deploymentscripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/fvt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/fvt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selfish-darling-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: selfish-darling-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Serve_time_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Serve_time_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serve-browserbench/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serve-browserbench/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Server_with_db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Server_with_db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/src/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/src/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/deployment-agent/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/deployment-agent/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/documents/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/documents/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/graylog/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/graylog/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/jaeger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/jaeger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/minio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/minio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/monitoring/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/monitoring/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/portainer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/portainer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/redis-commander/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/redis-commander/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/registry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/registry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/simcore/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/simcore/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/traefik/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/traefik/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shibboleth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shibboleth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Simple_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Simple_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitestatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitestatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Socketio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Socketio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sources/API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sources/API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spearmint/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spearmint/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spikes/config-material-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spikes/config-material-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SpotiApps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SpotiApps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/instanceWithDependentSteps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/instanceWithDependentSteps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptIntegrationProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptIntegrationProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptVisualizeProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/__tests__/__fixtures__/typeScriptVisualizeProject/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/add-auth/express/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/add-auth/express/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/assembly/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/assembly/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/character-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/character-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/client/mobile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/client/mobile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/core/tests/dotenv-files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/core/tests/dotenv-files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/gameprovider-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/gameprovider-service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/front-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/front-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/archetype-resources/__rootArtifactId__-acceptance-test/src/test/resources/app-launcher-tile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/archetype-resources/__rootArtifactId__-acceptance-test/src/test/resources/app-launcher-tile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/renderer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/renderer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/controller/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/controller/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/examples/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/examples/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/node-manager/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv6_controller/node-manager/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: st-js-be-2020-movies-two/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: st-js-be-2020-movies-two/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stackato-pkg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stackato-pkg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-collected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-collected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staticfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staticfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: style/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: style/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: styles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: styles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: target/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: target/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr9/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr9/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr10/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temanr10/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/addOrg3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-network/addOrg3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/aries-js-worker/fixtures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/aries-js-worker/fixtures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/adapter-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/adapter-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/agent-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/agent-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/couchdb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/couchdb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/demo/openapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/demo/openapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/did-method-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/did-method-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/did-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/did-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/edv-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/edv-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/openapi-demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/openapi-demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/sidetree-mock/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/sidetree-mock/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/universalresolver/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/universalresolver/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/vc-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/vc-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/app_types/node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/app_types/node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/app_types/rails/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/app_types/rails/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/node_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/fixtures/node_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/integration/env-config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/integration/env-config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Tests/Application/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Tests/Application/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v7.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v7.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v8.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v8.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v10.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v10.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v11.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v11.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v12.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v12.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v13.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/default_settings/v13.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/drupal-test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/drupal-test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/Integration/Environment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/Integration/Environment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/todo-react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/todo-react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testwork_json/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testwork_json/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thumb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thumb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thumbs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thumbs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tiedostot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tiedostot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Travel_form/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Travel_form/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ts/prime/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ts/prime/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ubuntu/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ubuntu/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unixtime/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unixtime/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unsplash-downloader/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unsplash-downloader/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: urlmem-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: urlmem-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: User_info/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: User_info/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/gobuffalo/envy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/gobuffalo/envy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/subosito/gotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/github.com/subosito/gotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: videos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: videos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vm-docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vm-docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vod_installer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vod_installer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue_CRM/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue_CRM/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue-end/vue-til/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue-end/vue-til/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/vuecli/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/vuecli/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Web/siteMariage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Web/siteMariage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot_path/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: websocket/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: websocket/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webstatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webstatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: well-known/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: well-known/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: whturk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: whturk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: windows/tests/9.2.x/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: windows/tests/9.2.x/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: windows/tests/9.3.x/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: windows/tests/9.3.x/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www-data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www-data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx-final/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx-final/vue-heroes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zmusic-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zmusic-frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: locally/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: locally/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stag/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stag/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:40:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:40:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeweb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeweb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: APP/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: APP/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACK/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACK/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BackEnd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BackEnd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACKEND/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACKEND/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONT/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONT/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:45:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONTEND/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:45:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONTEND/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:52:58 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-10-06 04:52:58 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-10-06 04:52:58 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-10-06 04:52:58 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-10-06 04:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 5rLi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 04:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 5rLi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 04:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 04:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 04:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: confluence/rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: confluence/rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 04:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 04:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1728179578 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 04:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1728179578 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 04:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 04:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 04:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 04:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 04:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 04:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 04:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 04:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 04:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 04:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 04:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 04:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 04:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 04:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 04:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-cached/hc/HostCheckerInstaller.osx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-cached/hc/HostCheckerInstaller.osx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 04:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 04:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 04:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 04:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-na/nc/nc_gina_ver.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-na/nc/nc_gina_ver.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/componentutils was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 04:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/componentutils was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 04:53:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 04:53:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 04:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/web/wicket/bookmarkable/org.geoserver.web.AboutGeoServerPage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/web/wicket/bookmarkable/org.geoserver.web.AboutGeoServerPage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/web/wicket/bookmarkable/org.geoserver.web.AboutGeoServerPage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/web/wicket/bookmarkable/org.geoserver.web.AboutGeoServerPage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Account/Login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 04:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Account/Login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 04:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xml/info.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xml/info.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL magento_version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 04:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL magento_version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 04:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 04:53:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 04:53:09 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-10-06 04:53:09 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-10-06 05:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 05:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 06:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 06:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:06:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:06:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:06:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:06:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:06:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:06:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:06:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:06:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:06:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:06:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:06:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/open ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:06:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/open ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:06:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:06:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/default/view.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:06:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/default/view.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:06:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 08:06:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 08:06:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL frontend/web/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 08:06:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL frontend/web/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 08:06:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: getcfg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:06:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: getcfg.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:06:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 08:06:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 08:06:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL infos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 08:06:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL infos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 08:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:06:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:06:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:06:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:06:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:06:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:06:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:06:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:06:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:06:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sapi/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 08:06:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sapi/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 08:06:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/all/libraries/mailchimp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:06:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/all/libraries/mailchimp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:06:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tool/view/phpinfo.view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:06:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tool/view/phpinfo.view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:06:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL web/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 08:06:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL web/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 08:06:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:06:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Pa9r was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 08:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Pa9r was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 08:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DKfh was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 08:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DKfh was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 08:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 08:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 08:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.slim.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.slim.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 08:46:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 08:46:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 08:46:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.2.slim.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 08:46:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.2.slim.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 09:53:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 09:53:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 09:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 09:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 10:34:53 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-10-06 10:34:53 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-10-06 10:37:06 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-10-06 10:37:06 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-10-06 10:37:10 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-10-06 10:37:10 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-10-06 10:37:37 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-10-06 10:37:37 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-10-06 10:37:41 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-10-06 10:37:41 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-10-06 11:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 11:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 11:29:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 11:29:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 12:53:53 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-10-06 12:53:53 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-10-06 13:37:26 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-10-06 13:37:26 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-10-06 14:45:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 14:45:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 15:55:08 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-10-06 15:55:08 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-10-06 16:10:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 16:10:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 16:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 16:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 17:06:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 17:06:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 17:06:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 17:06:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 18:47:05 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-10-06 18:47:05 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-10-06 19:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 19:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 19:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/index.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 19:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/index.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 19:54:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 19:54:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 20:06:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-10-06 20:06:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-10-06 20:13:50 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-10-06 20:13:50 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-10-06 22:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 22:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 22:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-10-06 22:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-10-06 23:36:12 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-10-06 23:36:12 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}