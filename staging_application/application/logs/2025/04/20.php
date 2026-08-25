<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-04-20 00:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 00:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 00:24:32 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-20 00:24:32 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-20 00:34:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 00:34:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 01:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 01:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:45:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: guest_auth/guestIsUp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 02:45:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: guest_auth/guestIsUp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 02:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL vpn/user/download/client was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 02:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL vpn/user/download/client was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 02:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL export/classroom-course-statistics was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 02:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL export/classroom-course-statistics was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 02:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL WEB_VMS/LEVEL15 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 02:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL WEB_VMS/LEVEL15 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 02:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bsh.servlet.BshServlet ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 02:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bsh.servlet.BshServlet ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataSetParam/verification;swagger-ui ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 02:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataSetParam/verification;swagger-ui ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upgrade/detail.jsp/login/LoginSSO.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 02:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upgrade/detail.jsp/login/LoginSSO.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webadm was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 02:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webadm was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 02:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/~iufo/com.ufida.web.action.ActionServlet ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 02:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/~iufo/com.ufida.web.action.ActionServlet ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL User/doLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 02:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL User/doLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 02:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobile/plugin/browser.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 02:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobile/plugin/browser.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL servlet/codesettree was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 02:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL servlet/codesettree was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 02:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zentao/user-login.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 02:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zentao/user-login.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: weaver/org.apache.xmlrpc.webserver.XmlRpcServlet ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 02:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: weaver/org.apache.xmlrpc.webserver.XmlRpcServlet ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:45:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uapjs/jsinvoke was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 02:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uapjs/jsinvoke was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 02:46:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/rpc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 02:46:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/rpc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 02:46:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 02:46:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL seeyon/htmlofficeservlet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 02:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL seeyon/htmlofficeservlet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 02:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: general/index/UploadFile.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 02:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: general/index/UploadFile.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:46:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/logo/logo-eoffice.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 02:46:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/logo/logo-eoffice.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:46:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: seeyon/test123456.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 02:46:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: seeyon/test123456.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:46:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sys/ui/extend/varkind/custom.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 02:46:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sys/ui/extend/varkind/custom.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: servlet/~ic/bsh.servlet.BshServlet ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 02:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: servlet/~ic/bsh.servlet.BshServlet ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:46:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sys/ui/extend/varkind/custom.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 02:46:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sys/ui/extend/varkind/custom.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:46:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: servlet/~ic/bsh.servlet.BshServlet ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 02:46:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: servlet/~ic/bsh.servlet.BshServlet ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/index.php/material/Material/_download_imgage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 02:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/index.php/material/Material/_download_imgage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/index.php/home/file/user_pics ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 02:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/index.php/home/file/user_pics ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 02:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 02:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 02:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 02:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL axis2-admin/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 02:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL axis2-admin/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 02:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL axis2/axis2-admin/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 02:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL axis2/axis2-admin/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 03:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL users/sign_in was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-04-20 03:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL users/sign_in was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 03:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login-x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login-x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/adminimize/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/adminimize/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/sniplets/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/sniplets/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/flash-album-gallery/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/flash-album-gallery/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:02:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/skysa-official/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:02:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/skysa-official/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/clickdesk-live-support-chat/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/clickdesk-live-support-chat/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/advanced-text-widget/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/advanced-text-widget/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/featurific-for-wordpress/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/featurific-for-wordpress/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/advanced-text-widget/advancedtext.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/advanced-text-widget/advancedtext.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:07:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL reports/rwservlet/showenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 03:07:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL reports/rwservlet/showenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 03:07:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL reports/rwservlet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 03:07:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL reports/rwservlet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 03:08:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/age-verification/age-verification.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:08:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/age-verification/age-verification.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:08:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:08:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/all-in-one-event-calendar/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/all-in-one-event-calendar/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/wp-facethumb/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/wp-facethumb/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:15:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SupportPortlet/faces/javax.faces.resource./WEB-INF/web.xml.jsf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:15:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SupportPortlet/faces/javax.faces.resource./WEB-INF/web.xml.jsf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: faces/javax.faces.resource/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: faces/javax.faces.resource/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SupportPortlet/faces/javax.faces.resource/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SupportPortlet/faces/javax.faces.resource/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: costModule/faces/javax.faces.resource./WEB-INF/web.xml.jsf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: costModule/faces/javax.faces.resource./WEB-INF/web.xml.jsf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secureader/javax.faces.resource/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secureader/javax.faces.resource/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myaccount/javax.faces.resource/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myaccount/javax.faces.resource/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: faces/javax.faces.resource./WEB-INF/web.xml.jsf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: faces/javax.faces.resource./WEB-INF/web.xml.jsf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: costModule/faces/javax.faces.resource/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: costModule/faces/javax.faces.resource/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myaccount/javax.faces.resource./WEB-INF/web.xml.jsf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myaccount/javax.faces.resource./WEB-INF/web.xml.jsf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secureader/javax.faces.resource./WEB-INF/web.xml.jsf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secureader/javax.faces.resource./WEB-INF/web.xml.jsf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:17:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/mf-gig-calendar/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:17:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/mf-gig-calendar/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:17:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/2-click-socialmedia-buttons/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:17:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/2-click-socialmedia-buttons/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/dhtmlxspreadsheet/codebase/spreadsheet.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/dhtmlxspreadsheet/codebase/spreadsheet.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:21:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/download-monitor/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:21:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/download-monitor/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:21:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/wp-integrator/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:21:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/wp-integrator/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:21:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webadm was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 03:21:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webadm was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 03:25:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/uploader/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:25:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/uploader/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:26:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/trafficanalyzer/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:26:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/trafficanalyzer/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:27:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _search was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 03:27:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _search was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 03:27:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/wp-ecommerce-shop-styling/includes/dompdf/dompdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:27:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/wp-ecommerce-shop-styling/includes/dompdf/dompdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/gboutique/library/dompdf/dompdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/gboutique/library/dompdf/dompdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/dompdf/dompdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/dompdf/dompdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/buddypress-component-stats/lib/dompdf/dompdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/buddypress-component-stats/lib/dompdf/dompdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/dompdf/dompdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/dompdf/dompdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/blogtopdf/dompdf/dompdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/blogtopdf/dompdf/dompdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/web-portal-lite-client-portal-secure-file-sharing-private-messaging/includes/libs/pdf/dompdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/web-portal-lite-client-portal-secure-file-sharing-private-messaging/includes/libs/pdf/dompdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/post-pdf-export/dompdf/dompdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/post-pdf-export/dompdf/dompdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PhpSpreadsheet/Writer/PDF/DomPDF.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PhpSpreadsheet/Writer/PDF/DomPDF.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dompdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dompdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/abstract-submission/dompdf-0.5.1/dompdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/abstract-submission/dompdf-0.5.1/dompdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:30:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/category-grid-view-gallery/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:30:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/category-grid-view-gallery/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/duplicator/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/duplicator/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backupmgt/localJob.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backupmgt/localJob.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:33:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backupmgt/pre_connect_check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:33:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backupmgt/pre_connect_check.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:34:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/wp-planet/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:34:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/wp-planet/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:34:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/wp-planet/rss.class/scripts/magpie_debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:34:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/wp-planet/rss.class/scripts/magpie_debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/stats was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 03:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/stats was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 03:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 03:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 03:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/test-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 03:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/test-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 03:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 03:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 03:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/status/status.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/status/status.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:39:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/activehelper-livehelp/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:39:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/activehelper-livehelp/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/infusionsoft/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/infusionsoft/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/movies/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/movies/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:40:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webadmin/auth/verification.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:40:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webadmin/auth/verification.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:40:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/ultimate-weather-plugin/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:40:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/ultimate-weather-plugin/readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:43:25 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_website ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-04-20 03:43:25 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_website ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 03:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _search was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 03:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _search was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 03:44:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/admin-ajax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:44:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/admin-ajax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 03:46:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cZk4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 03:46:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cZk4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 03:46:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 03:46:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 04:29:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 04:29:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 04:29:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 04:29:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 04:29:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 04:29:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 04:29:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 04:29:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 04:29:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 04:29:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 04:29:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 04:29:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 05:07:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 05:07:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 05:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 05:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 07:12:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 07:12:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 08:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 08:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 08:59:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 08:59:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 09:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 09:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 09:58:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 09:58:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 10:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: basic-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: basic-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configurations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configurations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cpresources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cpresources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_variables.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_variables.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extension/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extension/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/public/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/public/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsite/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsite/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pemerintah/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pemerintah/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: registration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: registration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spearmint/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spearmint/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/front-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/front-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:12:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webstatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:12:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webstatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 10:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 10:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 11:37:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 11:37:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 15:13:28 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-20 15:13:28 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-20 15:34:00 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-20 15:34:00 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-20 16:17:46 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-20 16:17:46 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-20 17:23:46 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-20 17:23:46 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-20 18:46:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:46:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/historypage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/historypage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sugar_version.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sugar_version.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:47:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aspera/faspex was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 18:47:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aspera/faspex was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 18:47:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon-32x32.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:47:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon-32x32.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 18:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 18:47:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL partymgr/control/main was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 18:47:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL partymgr/control/main was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 18:48:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: OA_HTML/AppsLocalLogin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:48:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: OA_HTML/AppsLocalLogin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showLogin.cc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showLogin.cc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:49:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL identity was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 18:49:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL identity was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 18:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.do ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.do ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:51:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cf_scripts/scripts/ajax/ckeditor/ckeditor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:51:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cf_scripts/scripts/ajax/ckeditor/ckeditor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:51:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 18:51:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 18:51:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/session/properties was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-04-20 18:51:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/session/properties was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 18:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ext-js/app/common/zld_product_spec.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ext-js/app/common/zld_product_spec.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitecore/shell/sitecore.version.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitecore/shell/sitecore.version.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:52:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webfig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 18:52:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webfig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 18:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/PTZOptics_powerby.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/PTZOptics_powerby.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Telerik.Web.UI.WebResource.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Telerik.Web.UI.WebResource.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:53:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:53:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:54:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 18:54:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 18:54:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL WebInterface was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 18:54:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL WebInterface was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 18:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:54:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/NewWindow_2_all.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:54:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/NewWindow_2_all.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:54:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:54:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/config.exp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/config.exp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:55:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:55:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:55:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL internal_forms_authentication was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 18:55:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL internal_forms_authentication was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 18:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zabbix/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 18:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zabbix/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 18:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 18:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 18:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL xmldata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 18:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL xmldata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 20:16:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 20:16:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 20:16:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 20:16:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 20:16:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 20:16:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 20:16:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 20:16:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 20:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 20:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 20:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 20:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 20:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 20:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 20:16:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 20:16:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 20:16:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 20:16:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 20:16:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 20:16:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 20:16:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 20:16:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 20:16:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 20:16:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 20:16:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 20:16:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-20 20:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vpn/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 20:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vpn/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 20:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vpn/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-20 20:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vpn/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-20 20:54:16 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-20 20:54:16 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-20 22:03:33 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-20 22:03:33 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-20 22:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-20 22:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}