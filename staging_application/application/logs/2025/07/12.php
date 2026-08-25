<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-07-12 00:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/login.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 00:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/login.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 00:18:35 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-12 00:18:35 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-12 00:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 00:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 00:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 00:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 00:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 00:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 00:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 00:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 00:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 00:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 00:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 00:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 00:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 00:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 00:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 00:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 00:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 00:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 00:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 00:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 00:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 00:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 00:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 00:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 00:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 00:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 01:06:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 01:06:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 01:28:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 01:28:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 01:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 01:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 01:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 01:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 01:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 01:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 01:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/login.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 01:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/login.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 01:46:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 01:46:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 01:47:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 01:47:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 01:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 01:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 01:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 01:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 01:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 01:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 02:54:14 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-12 02:54:14 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-12 03:17:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:17:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:17:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:17:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:17:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:17:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:17:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:17:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:17:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:17:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:17:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:17:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:17:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:17:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:17:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:17:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:17:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:17:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:17:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:17:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:17:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:17:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:17:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:17:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:17:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:17:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:17:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:17:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:17:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:17:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:17:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:17:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:17:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:17:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:17:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:17:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:21:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 03:21:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 03:21:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 03:21:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 03:21:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:21:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:21:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 03:21:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 03:21:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 03:21:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 03:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 03:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 03:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 03:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 03:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 03:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 03:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 03:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 03:31:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ewebeditor/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 03:31:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ewebeditor/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 03:34:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 03:34:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 03:41:17 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-12 03:41:17 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-12 04:38:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 04:38:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 04:38:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 04:38:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 04:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ads.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 04:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ads.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 04:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-ads.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 04:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-ads.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 04:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sellers.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 04:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sellers.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 04:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ads.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 04:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ads.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 04:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-ads.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 04:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-ads.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 04:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sellers.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 04:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sellers.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 05:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 05:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 05:34:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 05:34:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 06:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 06:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 06:59:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 06:59:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 07:04:05 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2025-07-12 07:04:05 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-07-12 07:06:05 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-12 07:06:05 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-12 07:13:29 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2025-07-12 07:13:29 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2025-07-12 07:27:25 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2025-07-12 07:27:25 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-07-12 07:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 07:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 07:36:23 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2025-07-12 07:36:23 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-07-12 07:58:41 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2025-07-12 07:58:41 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-07-12 08:06:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 08:06:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 08:08:20 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2025-07-12 08:08:20 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-07-12 08:15:43 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2025-07-12 08:15:43 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2025-07-12 08:25:03 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2025-07-12 08:25:03 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-07-12 08:35:00 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2025-07-12 08:35:00 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-07-12 08:45:50 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2025-07-12 08:45:50 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-07-12 08:56:44 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2025-07-12 08:56:44 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-07-12 09:04:38 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2025-07-12 09:04:38 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-07-12 09:14:10 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2025-07-12 09:14:10 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2025-07-12 09:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/Plugin/h-ui/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 09:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/Plugin/h-ui/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 09:24:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 09:24:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 09:24:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 09:24:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 09:25:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 09:25:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 09:32:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 09:32:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 09:32:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 09:32:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 09:53:44 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-12 09:53:44 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-12 10:23:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 10:23:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 10:37:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 10:37:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 11:19:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 11:19:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 11:19:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 11:19:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 11:19:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 11:19:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 11:19:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 11:19:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 11:19:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 11:19:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 11:19:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 11:19:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 11:19:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 11:19:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 11:19:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 11:19:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 11:19:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 11:19:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 11:19:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 11:19:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 11:19:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 11:19:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 11:19:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 11:19:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 11:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 11:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 12:39:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 12:39:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 14:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 14:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 14:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 14:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 14:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 14:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 14:29:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 14:29:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 14:29:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 14:29:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 14:29:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 14:29:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 14:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 14:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 14:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 14:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 14:50:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loginok.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 14:50:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loginok.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 15:00:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 15:00:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 15:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 15:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 15:00:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 15:00:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 15:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 15:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 15:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 15:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 15:00:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 15:00:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 15:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 15:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 15:01:56 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-12 15:01:56 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-12 15:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 15:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 15:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 15:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 15:04:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 15:04:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 15:34:58 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-12 15:34:58 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-12 16:13:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 16:13:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: router.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: router.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: middleware.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: middleware.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: handlers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: handlers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.production.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.production.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: run.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: run.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.go.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.go.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pkg.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pkg.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go.sum.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go.sum.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go.mod.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements.txt.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go.mod.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements.txt.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staticfiles.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staticfiles.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jinja2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jinja2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layout.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layout.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: trace.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: trace.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci_cd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci_cd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cicd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cicd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workflow.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workflow.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudbuild.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudbuild.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_old.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_old.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbdump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbdump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqllite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqllite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudflare.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudflare.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sample.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sample.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vercel.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vercel.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: example.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archived.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archived.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: documentation.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: documentation.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: netlify.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: netlify.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbase.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbase.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instance.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instance.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump_data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump_data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.development.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.development.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dumpdata.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dumpdata.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go_server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go_server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: version.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: version.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: golang_backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: golang_backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archives.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archives.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.dev.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.dev.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 16:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 16:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 17:15:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 17:15:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 17:35:13 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-07-12 17:35:13 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-07-12 18:04:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:04:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codebase.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codebase.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_dump.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_dump.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: full.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: full.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mariadb.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mariadb.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source_code.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source_code.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: version.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: version.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jwt_secrets.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jwt_secrets.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh_keys.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh_keys.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth_tokens.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth_tokens.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: syslog.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: syslog.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restore.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restore.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: notes.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: notes.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_old.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_old.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: snapshots.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: snapshots.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s_config.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s_config.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp_site.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp_site.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_env.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_env.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userdata.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: personal.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: personal.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive_old.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive_old.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: junk.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: junk.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tempfiles.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tempfiles.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitoring.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitoring.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systemd.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systemd.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:27:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:27:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Archive.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Archive.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Archive.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Archive.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: version.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: version.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp_site.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp_site.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 20:42:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-12 20:42:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 21:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 21:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 21:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 21:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 21:15:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 21:15:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 21:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 21:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 21:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 21:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 21:34:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 21:34:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 21:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 21:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 21:34:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 21:34:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 22:12:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 22:12:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-12 22:26:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 22:26:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 22:27:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 22:27:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 22:29:22 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-12 22:29:22 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-12 22:31:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 22:31:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 22:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 22:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 22:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 22:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 23:07:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-12 23:07:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-12 23:11:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-12 23:11:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}