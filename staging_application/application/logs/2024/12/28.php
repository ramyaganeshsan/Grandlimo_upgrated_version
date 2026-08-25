<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2024-12-28 00:16:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 00:16:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 00:17:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 00:17:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 00:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 00:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 00:30:32 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-28 00:30:32 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-28 01:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 01:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 01:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 01:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 01:52:22 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-28 01:52:22 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-28 02:13:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:13:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:23:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:23:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/bash.bashrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/bash.bashrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL etc/bashrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 02:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL etc/bashrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 02:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL etc/profile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 02:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL etc/profile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 02:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/skel/.bash_profile ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/skel/.bash_profile ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/skel/.bashrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/skel/.bashrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/skel/.profile ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/skel/.profile ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/skel/.zshrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/skel/.zshrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL etc/zlogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 02:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL etc/zlogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 02:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL etc/zlogout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 02:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL etc/zlogout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 02:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL etc/zprofile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 02:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL etc/zprofile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 02:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL etc/zsh/zshrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 02:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL etc/zsh/zshrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 02:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL etc/zshenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 02:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL etc/zshenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 02:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL etc/zshrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 02:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL etc/zshrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 02:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.bash_profile ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.bash_profile ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.bashrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.bashrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.profile ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.profile ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.zshrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.zshrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.bash_profile ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.bash_profile ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.bashrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.bashrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.profile ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.profile ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.zshrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.zshrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __MACOSX/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __MACOSX/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amphtml/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amphtml/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aomanalyzer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aomanalyzer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: AWSconf.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: AWSconf.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdn/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdn/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: documentation/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: documentation/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dot.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dot.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flock/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flock/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: git/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: git/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: labs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: labs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: m/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: m/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: module/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: module/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-cuburn/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-cuburn/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preview/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preview/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projects/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projects/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: util/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: util/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wiki/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wiki/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/mu-plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/mu-plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/css/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/css/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/images/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/images/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 02:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 02:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 04:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 04:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 05:07:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 05:07:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 05:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 05:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 05:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 05:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 05:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dvr/cmd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 05:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dvr/cmd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 05:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cn/cmd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 05:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cn/cmd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 06:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 06:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 06:36:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 06:36:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 06:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 06:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:32:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:32:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/admin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/admin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/admin.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/admin.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/admin.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/admin.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/app.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/app.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/check.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/check.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/check.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/check.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/check.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/check.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/config.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/config.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/debug-info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/debug-info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/debug.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/debug.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/debug.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/debug.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/debug.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/debug.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/debug.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/debug.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/development.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/development.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/dispatch.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/dispatch.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/dispatch.fcgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/dispatch.fcgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/env-check.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/env-check.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/env-test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/env-test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/env.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/env.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/env.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/env.fcgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/env.fcgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/env.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/env.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/env.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/env.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/env.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/env.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/env.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/env.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/environment.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/environment.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/environment.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/environment.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/environment.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/environment.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/environment.fcgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/environment.fcgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/environment.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/environment.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/environment.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/environment.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/environment.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/environment.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/environment.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/environment.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info-sys.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info-sys.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/local.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/local.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.fcgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.fcgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php4.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php4.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php5.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php5.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php7.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php7.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php8.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php8.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/phpinfo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/phpinfo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/printenv.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/printenv.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/printenv.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/printenv.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/printenv.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/printenv.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/printenv.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/printenv.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/production.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/production.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/ruby.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/ruby.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/ruby.fcgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/ruby.fcgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/server-info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/server-info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/server-status.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/server-status.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/settings.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/settings.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/settings.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/settings.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/status.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/status.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/sys-info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/sys-info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/staging.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/staging.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/system-info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/system-info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/system.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/system.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test-env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test-env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/test-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/test-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test-env.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test-env.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test-env.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test-env.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test-env.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test-env.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/vars.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/vars.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/vars.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/vars.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/vars.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/vars.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-local/environment.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-local/environment.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-local/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-local/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-local/info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-local/info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-local/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-local/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-local/phpinfo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-local/phpinfo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-sys/environment.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-sys/environment.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-sys/phpinfo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-sys/phpinfo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-sys/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-sys/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-sys/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-sys/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi/phpinfo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi/phpinfo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi/environment.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi/environment.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fcgi-bin/env.fcgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fcgi-bin/env.fcgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fcgi-bin/environment.fcgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fcgi-bin/environment.fcgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fcgi-bin/php.fcgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fcgi-bin/php.fcgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fcgi-bin/test.fcgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fcgi-bin/test.fcgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/public_html/cgi-bin/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/public_html/cgi-bin/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/cgi-bin/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/cgi-bin/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/www/cgi-bin/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/www/cgi-bin/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/public_html/cgi-bin/phpinfo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/public_html/cgi-bin/phpinfo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/public_html/cgi-bin/environment.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/public_html/cgi-bin/environment.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/www/cgi-bin/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/www/cgi-bin/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/cgi-bin/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/cgi-bin/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/public_html/cgi-bin/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/public_html/cgi-bin/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL usr/lib/cgi-bin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 07:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL usr/lib/cgi-bin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 07:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL usr/lib/cgi-bin/environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 07:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL usr/lib/cgi-bin/environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 07:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL usr/lib/cgi-bin/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 07:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL usr/lib/cgi-bin/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 07:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL usr/lib/cgi-bin/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 07:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL usr/lib/cgi-bin/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 07:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL usr/local/cgi-bin/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 07:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL usr/local/cgi-bin/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 07:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/apache/cgi-bin/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/apache/cgi-bin/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL usr/local/cgi-bin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 07:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL usr/local/cgi-bin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 07:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/cpanel/cgi-sys/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/cpanel/cgi-sys/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/cpanel/cgi-sys/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/cpanel/cgi-sys/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/apache/cgi-bin/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/apache/cgi-bin/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL usr/local/cgi-bin/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 07:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL usr/local/cgi-bin/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 07:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL usr/local/cgi-bin/environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 07:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL usr/local/cgi-bin/environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 07:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/www/cgi-bin/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/www/cgi-bin/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/www/cgi-bin/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/www/cgi-bin/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL var/www/cgi-bin/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 07:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL var/www/cgi-bin/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 07:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL var/www/cgi-bin/environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 07:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL var/www/cgi-bin/environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 07:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL var/www/cgi-bin/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 07:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL var/www/cgi-bin/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 07:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL var/www/cgi-bin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 07:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL var/www/cgi-bin/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 07:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/cgi-bin/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/cgi-bin/env.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 07:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/cgi-bin/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 07:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/cgi-bin/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:05:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:05:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:05:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:05:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:05:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:05:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:05:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:05:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:05:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:05:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:05:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:05:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:05:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:05:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:05:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:05:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:05:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:05:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:05:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:05:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:05:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:05:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:05:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:05:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:05:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:05:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:05:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:05:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:05:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:05:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:05:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:05:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:06:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:06:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:06:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:06:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:06:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:06:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:06:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:06:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:06:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:06:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:06:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:06:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:06:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:06:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:06:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:06:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:57 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
2024-12-28 08:42:57 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
--
#0 /var/www/html/application/classes/controller/api.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 50, Array)
#1 [internal function]: Controller_Api->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2024-12-28 08:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-docs.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-docs.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-docs.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-docs.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-docs.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-docs.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api-docs/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api-docs/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api-docs/v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api-docs/v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api-docs/v2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api-docs/v2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api-docs/v3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api-docs/v3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api-explorer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api-explorer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-spec.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-spec.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-spec.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-spec.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-spec.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-spec.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api-specification was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api-specification was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/docs/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/docs/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/documentation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/documentation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/explorer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/explorer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/graphiql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/graphiql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/openapi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/openapi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/schema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/schema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/swagger-ui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/swagger-ui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/doc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/doc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/documentation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/documentation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/openapi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/openapi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/schema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/schema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/doc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/doc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/openapi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/openapi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/documentation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/documentation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/schema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/schema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v3/doc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v3/doc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v3/documentation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v3/documentation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v3/docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v3/docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v3/openapi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v3/openapi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v3/schema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v3/schema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL docs/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL docs/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL docs/openapi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL docs/openapi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL docs/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL docs/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL docs/schema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL docs/schema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v3/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v3/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL docs/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL docs/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL docs/v1/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL docs/v1/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL explorer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL explorer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL docs/v3/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL docs/v2/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL docs/v2/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL docs/v3/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphiql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphiql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphiql-playground was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphiql-playground was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graphiql.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graphiql.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql-console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql-console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql/console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql/console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql-playground was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql-playground was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql/explorer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql/explorer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql-explorer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql-explorer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql/schema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql/schema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql/playground was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql/playground was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL insomnia was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL insomnia was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: insomnia.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: insomnia.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: insomnia.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: insomnia.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: insomnia.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: insomnia.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL openapi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL openapi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL openapi-spec was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL openapi-spec was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: openapi.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: openapi.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: openapi.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: openapi.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL openapi/v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL openapi/v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: openapi.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: openapi.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL openapi/v2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL openapi/v2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL openapi/v3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL openapi/v3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postman.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postman.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL postman was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL postman was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL postman-collection was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL postman-collection was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postman.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postman.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL redoc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL redoc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postman.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postman.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL postman/collection was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL postman/collection was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL redoc/v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL redoc/v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL redoc/v2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL redoc/v2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: schema.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: schema.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL redoc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL redoc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL redoc/v3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL redoc/v3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL schema/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL schema/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redoc.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: schema.graphql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redoc.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: schema.graphql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL schema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL schema was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL schema/openapi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL schema/openapi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL schema/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL schema/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swagger-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swagger-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swagger-resources was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swagger-resources was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swagger-ui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swagger-ui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swagger-spec was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swagger-spec was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swagger-ui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swagger-ui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swagger/docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swagger/docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/static/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/static/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swagger/ui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swagger/ui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swagger/spec was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swagger/spec was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/ui/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/ui/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swagger/v2/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swagger/v2/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swagger/v1/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swagger/v1/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swagger/v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swagger/v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swagger/v3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swagger/v3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swagger/v3/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swagger/v3/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1/swagger-ui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1/swagger-ui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swagger/v2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swagger/v2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v3/swagger-ui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v3/swagger-ui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/swagger-ui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/swagger-ui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v3/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v3/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v3/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v3/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 08:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 08:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 09:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _wpeprivate/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _wpeprivate/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-backup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-backup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-backup.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-backup.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.backup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.backup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.BAK ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.BAK ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bck ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bck ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.beta ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.beta ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.copy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.copy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.current ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.current ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.debug ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.debug ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.default ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.default ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.demo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.demo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.encrypted ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.encrypted ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.git ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.git ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.github ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.github ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.hidden ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.hidden ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.live ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.live ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.main ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.main ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.new ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.new ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.OLD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.OLD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.old.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.old.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.old1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.old1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.old2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.old2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.orig.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.orig.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.$$$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.$$$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.000 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.000 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.111 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.111 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.2020 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.2020 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.2021 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.2021 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.2022 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.2022 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.2023 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.2023 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.2024 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.2024 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.archived ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.archived ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.back ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.back ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.BASE ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.BASE ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.conflict ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.conflict ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.copy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.copy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.default ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.default ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.disabled ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.disabled ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.LOCAL ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.LOCAL ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.master ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.master ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.moved ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.moved ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.new ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.new ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.OLD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.OLD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.previous ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.previous ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.protected ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.protected ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.readonly ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.readonly ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.REMOTE ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.REMOTE ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.rename ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.rename ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.SAVE ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.SAVE ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.saved ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.saved ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.stage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.stage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.sw[no] ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.sw[no] ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.temp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.temp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.template ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.template ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.testing ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.testing ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.version ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.version ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.working ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.working ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php._ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php._ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_new ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_new ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_Old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_Old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.preview ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.preview ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.prod.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.prod.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.protected ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.protected ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.sample ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.stage.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.stage.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.staging.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.staging.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.temp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.temp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.testing.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.testing.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.version ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.version ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:39:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 09:39:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 09:39:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:39:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:39:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 09:39:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 09:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 09:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 09:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 09:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 09:39:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 09:39:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 09:39:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:39:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:39:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:39:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:39:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 09:39:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 09:39:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:39:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 09:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 09:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 09:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 10:18:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: https:/grandlimo.indiprotechnologies.com/public/uploads/favicon ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 10:18:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: https:/grandlimo.indiprotechnologies.com/public/uploads/favicon ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 10:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 10:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 10:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 10:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 10:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 10:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 10:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wallet.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 10:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wallet.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 10:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 10:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 10:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 10:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 10:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hardhat.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 10:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hardhat.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 10:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 10:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 10:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 10:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 10:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 10:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 10:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 10:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 10:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftpsync.settings ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 10:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftpsync.settings ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 10:59:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 10:59:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 11:06:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 11:06:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 11:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 11:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 11:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 11:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 12:13:38 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-12-28 12:13:38 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-12-28 13:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 13:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 13:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 13:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 14:07:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 14:07:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 14:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 14:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 15:46:22 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-12-28 15:46:22 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-12-28 15:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 15:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 16:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 16:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 16:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 16:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 17:30:49 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-28 17:30:49 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-28 18:47:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 18:47:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 19:07:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: authentication.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: authentication.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-service-principal.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-service-principal.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitbucket-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitbucket-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cert.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cert.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/secret_token.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/secret_token.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/master.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/master.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/paypal.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/paypal.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/paypal.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/paypal.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/square.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/square.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/square.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/square.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connection-strings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connection-strings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connections.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connections.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connections.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connections.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connections.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connections.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml.enc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml.enc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbconfig.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbconfig.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: digitalocean.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: digitalocean.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: do-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: do-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-admin.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-admin.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gitlab-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gitlab-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL htpasswd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL htpasswd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htpasswd.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htpasswd.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL id_dsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL id_dsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL id_rsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL id_rsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jwt.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jwt.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jwt.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jwt.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jwt.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jwt.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kafka.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kafka.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kafka.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kafka.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kafka.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kafka.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: LocalSettings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: LocalSettings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongo.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongo.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongo.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongo.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongo.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongo.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passes.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passes.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passwd.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passwd.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passwords.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passwords.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pip.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pip.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recentservers.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recentservers.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robomongo.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robomongo.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL s3cfg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL s3cfg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: username.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: username.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _netrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 19:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _netrc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 19:16:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 19:16:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 19:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 19:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 19:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 19:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 20:26:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 20:26:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 20:26:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 20:26:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:01:22 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-28 21:01:22 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-28 21:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud-config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud-config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL feed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 21:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL feed was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 21:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _vti_pvt/service.pwd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _vti_pvt/service.pwd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL etc/shadow was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 21:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL etc/shadow was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 21:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _vti_pvt/administrators.pwd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _vti_pvt/administrators.pwd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _vti_pvt/authors.pwd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _vti_pvt/authors.pwd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/setup-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/setup-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/ssl/private/server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/ssl/private/server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 21:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 21:32:00 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-12-28 21:32:00 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-12-28 22:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _wpeprivate/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _wpeprivate/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: angular.config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: angular.config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v3/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v3/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdn/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdn/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.backup.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.backup.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.custom.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.custom.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.dev.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.dev.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.dist.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.dist.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.example.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.example.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.prod.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.prod.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.stage.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.stage.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.sample.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.sample.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.template.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.template.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/security.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/security.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/base/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/base/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/payments/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/payments/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: documentation/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: documentation/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graphql/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graphql/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i18n/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i18n/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: locales/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: locales/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logging/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logging/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt.config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt.config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next.config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next.config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: openapi/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: openapi/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/assets/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/assets/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: middleware/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: middleware/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react.config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react.config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/static/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/static/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue.config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue.config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: travis/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 22:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: travis/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 23:12:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 23:12:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 23:26:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL WuEL was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 23:26:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL WuEL was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 23:26:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 23:26:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 23:26:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file.ext ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 23:26:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file.ext ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-28 23:26:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SiteLoader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 23:26:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SiteLoader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 23:26:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mPlayer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-28 23:26:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mPlayer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-28 23:31:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-28 23:31:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}