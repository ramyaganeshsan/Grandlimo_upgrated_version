<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2023-05-11 00:11:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 00:11:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 00:33:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mgmt/tm/util/bash was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 00:33:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mgmt/tm/util/bash was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 00:54:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 00:54:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 01:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 01:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 01:47:10 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-05-11 01:47:10 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-05-11 01:47:12 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-05-11 01:47:12 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-05-11 01:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1683758830 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 01:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1683758830 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 01:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 01:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 01:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 01:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 01:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 01:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 02:03:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2023-05-11 02:03:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 02:23:33 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-05-11 02:23:33 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-05-11 02:23:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 02:23:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 02:23:34 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-05-11 02:23:34 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-05-11 02:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1683761013 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 02:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1683761013 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 02:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 02:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 02:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 02:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 02:23:37 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-05-11 02:23:37 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-05-11 02:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 02:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 03:40:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL oamfed/idp/soap was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 03:40:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL oamfed/idp/soap was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/src was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2023-05-11 05:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/src was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php/$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php/$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL php-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL php-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL root/infophp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL root/infophp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL testphpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL testphpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL envrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL envrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: results/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: results/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.list ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.list ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: printenv.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: printenv.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuators/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuators/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL management/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL management/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.flaskenv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.flaskenv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tornado.options ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tornado.options ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/printenv.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/printenv.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jetty-env.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jetty-env.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/config/system.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/config/system.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bower.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bower.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/src was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2023-05-11 05:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/src was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php/$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php/$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL php-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL php-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL root/infophp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL root/infophp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL testphpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL testphpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL envrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL envrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: results/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: results/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.list ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.list ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: printenv.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: printenv.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuators/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuators/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL management/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL management/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.flaskenv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.flaskenv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tornado.options ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tornado.options ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/printenv.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/printenv.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jetty-env.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jetty-env.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/config/system.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/config/system.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bower.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bower.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/src was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2023-05-11 05:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/src was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php/$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php/$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL php-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL php-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL root/infophp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL root/infophp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL testphpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL testphpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL envrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL envrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: results/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: results/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.list ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.list ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: printenv.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: printenv.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuators/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuators/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL management/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL management/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.flaskenv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.flaskenv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tornado.options ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tornado.options ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 05:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 05:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/printenv.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/printenv.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jetty-env.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jetty-env.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/config/system.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/config/system.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bower.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bower.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 05:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 05:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 06:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 06:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 06:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 06:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 07:13:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 07:13:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 07:25:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 07:25:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 07:25:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 07:25:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 09:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/src was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2023-05-11 09:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/src was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 09:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 09:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 09:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php/$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php/$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL php-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 09:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL php-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 09:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 09:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 09:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL root/infophp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 09:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL root/infophp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 09:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL testphpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 09:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL testphpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 09:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php. ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 09:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 09:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL envrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 09:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL envrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 09:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manual/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: results/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: results/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 09:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 09:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 09:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 09:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 09:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 09:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.list ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.list ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 09:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 09:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: printenv.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: printenv.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 09:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 09:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuators/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 09:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuators/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 09:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL management/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 09:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL management/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 09:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.flaskenv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.flaskenv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 09:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 09:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tornado.options ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tornado.options ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 09:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 09:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 09:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 09:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/printenv.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/printenv.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jetty-env.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jetty-env.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/config/system.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/config/system.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bower.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bower.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.hjson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 09:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 09:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.cson ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 11:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 11:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 11:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dvr/cmd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 11:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dvr/cmd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 11:29:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cn/cmd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 11:29:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cn/cmd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 11:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/home/js/check.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 11:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/home/js/check.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 11:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 11:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 12:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 12:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 12:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 12:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 13:20:29 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-05-11 13:20:29 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-05-11 13:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 13:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 15:30:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 15:30:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 16:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 16:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 17:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: video/139239.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 17:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: video/139239.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 17:58:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL explore was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 17:58:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL explore was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 18:55:40 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-05-11 18:55:40 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-05-11 20:22:01 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-05-11 20:22:01 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-05-11 20:37:16 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-05-11 20:37:16 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-05-11 20:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 20:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 20:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 20:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 20:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL muieblackcat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 20:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL muieblackcat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-11 20:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 20:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 20:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 20:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 20:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 20:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 20:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 20:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 20:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-11 20:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-11 22:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-11 22:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}