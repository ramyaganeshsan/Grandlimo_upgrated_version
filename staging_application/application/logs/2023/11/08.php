<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2023-11-08 00:02:54 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-11-08 00:02:54 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-11-08 01:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/text/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2023-11-08 01:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/text/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 01:19:35 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-11-08 01:19:35 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-11-08 01:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 01:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 01:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL FD873AC4-CF86-4FED-84EC-4BD59C6F17A7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 01:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL FD873AC4-CF86-4FED-84EC-4BD59C6F17A7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 03:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 03:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 04:46:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 04:46:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 05:32:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 05:32:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 06:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 06:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 08:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 08:00:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testphp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testphp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: in.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: in.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: foo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: foo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2023-11-08 08:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 08:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 08:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 08:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: o.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: o.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp/testphp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp/testphp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info3.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:00:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2023-11-08 08:00:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 08:00:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL root/infophp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 08:00:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL root/infophp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 08:00:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scripts/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 08:00:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scripts/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 08:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 08:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 08:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/php-details.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/php-details.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL php-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 08:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL php-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 08:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpdetails was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 08:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpdetails was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 08:01:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL php_details was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 08:01:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL php_details was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 08:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: information.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: information.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL information was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 08:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL information was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 08:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinformation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 08:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinformation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 08:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/admin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2023-11-08 08:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/admin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 08:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboardadmin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboardadmin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboardadmin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 08:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboardadmin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 08:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboardadmin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboardadmin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tools/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 08:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tools/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 08:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webdav/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webdav/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webdav/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 08:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webdav/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 08:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webdav/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webdav/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testphpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testphpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL testphpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 08:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL testphpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 08:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PHPConf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PHPConf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: viewinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: viewinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fedora.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fedora.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: File/PHP/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: File/PHP/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL File/PHP/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 08:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL File/PHP/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 08:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: File/PHP/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: File/PHP/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: channel/team/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: channel/team/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sysinfo/tabs/php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sysinfo/tabs/php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ~cats/php/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ~cats/php/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ~cats/php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ~cats/php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ~cats/php/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 08:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ~cats/php/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 08:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 08:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 08:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info/phpinfo.php/php-info/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info/phpinfo.php/php-info/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actions-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actions-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agora/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agora/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: anaconda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: anaconda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Archipel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Archipel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset_img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset_img/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backendfinaltest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backendfinaltest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: basic-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: basic-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bgoldd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bgoldd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitcoind/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitcoind/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blankon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blankon/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blob/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blob/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bookchain-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bookchain-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucoffea/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucoffea/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cardea/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cardea/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdw-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdw-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenges/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: challenges/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/liveObjects/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/liveObjects/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chiminey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chiminey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ClientApp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clld_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clld_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collected_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collected_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ContainerRegistry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/Datavase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/Datavase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterblockd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterblockd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterwallet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterwallet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cryo_project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cryo_project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: custom/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: delivery/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: delivery/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developerslv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developerslv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: directories/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: directories/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 08:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 08:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 10:26:07 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-11-08 10:26:07 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-11-08 10:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stalker_portal/server/tools/auth_simple.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 10:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stalker_portal/server/tools/auth_simple.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 11:11:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 11:11:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 11:12:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 11:12:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 11:23:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cf_scripts/scripts/ajax/ckeditor/ckeditor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 11:23:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cf_scripts/scripts/ajax/ckeditor/ckeditor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 14:26:55 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-11-08 14:26:55 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-11-08 15:04:10 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-11-08 15:04:10 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-11-08 15:52:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 15:52:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 16:10:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 16:10:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 16:12:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 16:12:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 19:19:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 19:19:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-08 21:47:10 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-11-08 21:47:10 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-11-08 22:36:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-08 22:36:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-08 23:23:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ueditor/net/controller.ashx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-08 23:23:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ueditor/net/controller.ashx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}