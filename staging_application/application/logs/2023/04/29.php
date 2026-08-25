<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2023-04-29 02:04:22 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-04-29 02:04:22 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-04-29 02:04:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http://eth0.me ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 02:04:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http://eth0.me ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 02:21:49 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-04-29 02:21:49 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-04-29 02:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 02:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 03:53:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: echo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 03:53:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: echo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:37:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 04:37:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 04:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 04:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 04:37:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 04:37:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 04:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 04:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 04:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:56:35 --- ERROR: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
2023-04-29 04:56:35 --- STRACE: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 04:56:35 --- ERROR: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
2023-04-29 04:56:35 --- STRACE: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
--
#0 /var/www/html/application/classes/controller/company.php(959): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 959, Array)
#1 [internal function]: Controller_Company->action_getfreetrial()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Company))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 04:56:35 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2023-04-29 04:56:35 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 04:56:35 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2023-04-29 04:56:35 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 04:56:35 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2023-04-29 04:56:35 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 04:56:35 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
2023-04-29 04:56:35 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 04:56:35 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
2023-04-29 04:56:35 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 04:56:35 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2023-04-29 04:56:35 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 04:56:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2023-04-29 04:56:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 04:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 04:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 04:57:35 --- ERROR: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
2023-04-29 04:57:35 --- STRACE: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 04:57:35 --- ERROR: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
2023-04-29 04:57:35 --- STRACE: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
--
#0 /var/www/html/application/classes/controller/company.php(959): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 959, Array)
#1 [internal function]: Controller_Company->action_getfreetrial()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Company))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 04:57:35 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2023-04-29 04:57:35 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 04:57:35 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2023-04-29 04:57:35 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 04:57:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2023-04-29 04:57:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 04:57:35 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2023-04-29 04:57:35 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 04:57:35 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
2023-04-29 04:57:35 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 04:57:35 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
2023-04-29 04:57:35 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 04:57:35 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2023-04-29 04:57:35 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 04:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 04:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 04:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:58:18 --- ERROR: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
2023-04-29 04:58:18 --- STRACE: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
--
#0 /var/www/html/application/classes/controller/company.php(959): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 959, Array)
#1 [internal function]: Controller_Company->action_getfreetrial()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Company))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 04:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:58:18 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2023-04-29 04:58:18 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 04:58:18 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2023-04-29 04:58:18 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 04:58:18 --- ERROR: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
2023-04-29 04:58:18 --- STRACE: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 04:58:19 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2023-04-29 04:58:19 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 04:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:58:19 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
2023-04-29 04:58:19 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 04:58:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2023-04-29 04:58:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 04:58:19 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2023-04-29 04:58:19 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 04:58:19 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
2023-04-29 04:58:19 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 04:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 04:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 04:59:22 --- ERROR: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
2023-04-29 04:59:22 --- STRACE: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 04:59:22 --- ERROR: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
2023-04-29 04:59:22 --- STRACE: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
--
#0 /var/www/html/application/classes/controller/company.php(959): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 959, Array)
#1 [internal function]: Controller_Company->action_getfreetrial()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Company))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 04:59:22 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2023-04-29 04:59:22 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 04:59:23 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2023-04-29 04:59:23 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 04:59:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2023-04-29 04:59:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 04:59:23 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
2023-04-29 04:59:23 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 04:59:23 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
2023-04-29 04:59:23 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 04:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:59:23 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2023-04-29 04:59:23 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 04:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 04:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 04:59:23 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2023-04-29 04:59:23 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 05:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 05:00:18 --- ERROR: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
2023-04-29 05:00:18 --- STRACE: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
--
#0 /var/www/html/application/classes/controller/company.php(959): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 959, Array)
#1 [internal function]: Controller_Company->action_getfreetrial()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Company))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 05:00:18 --- ERROR: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
2023-04-29 05:00:18 --- STRACE: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 05:00:18 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2023-04-29 05:00:18 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 05:00:18 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2023-04-29 05:00:18 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 05:00:18 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2023-04-29 05:00:18 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 05:00:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2023-04-29 05:00:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 05:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:18 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2023-04-29 05:00:18 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 05:00:18 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
2023-04-29 05:00:18 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 05:00:18 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
2023-04-29 05:00:18 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:00:54 --- ERROR: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
2023-04-29 05:00:54 --- STRACE: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 05:00:54 --- ERROR: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
2023-04-29 05:00:54 --- STRACE: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
--
#0 /var/www/html/application/classes/controller/company.php(959): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 959, Array)
#1 [internal function]: Controller_Company->action_getfreetrial()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Company))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 05:00:54 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2023-04-29 05:00:54 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 05:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 05:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 05:00:54 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2023-04-29 05:00:54 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 05:00:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2023-04-29 05:00:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 05:00:54 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
2023-04-29 05:00:54 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 05:00:54 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
2023-04-29 05:00:54 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 05:00:54 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2023-04-29 05:00:54 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 05:00:54 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2023-04-29 05:00:54 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 05:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:01:40 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2023-04-29 05:01:40 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 05:01:40 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2023-04-29 05:01:40 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 05:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:01:40 --- ERROR: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
2023-04-29 05:01:40 --- STRACE: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
--
#0 /var/www/html/application/classes/controller/company.php(959): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 959, Array)
#1 [internal function]: Controller_Company->action_getfreetrial()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Company))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 05:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 05:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 05:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:01:41 --- ERROR: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
2023-04-29 05:01:41 --- STRACE: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 05:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:01:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2023-04-29 05:01:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 05:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 05:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 05:01:41 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2023-04-29 05:01:41 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 05:01:41 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
2023-04-29 05:01:41 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 05:01:41 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
2023-04-29 05:01:41 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-29 05:01:42 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2023-04-29 05:01:42 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-29 05:17:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 05:17:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 06:42:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 06:42:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 07:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-content was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 07:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-content was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 07:59:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 07:59:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 08:00:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 08:00:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 09:23:53 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-04-29 09:23:53 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-04-29 09:45:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 09:45:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 10:11:01 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-04-29 10:11:01 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-04-29 11:04:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 11:04:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 13:09:45 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-04-29 13:09:45 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-04-29 13:20:18 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-04-29 13:20:18 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-04-29 14:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 14:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 14:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 14:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 15:53:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: voddetail/34412.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 15:53:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: voddetail/34412.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 16:17:09 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-04-29 16:17:09 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-04-29 17:14:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 17:14:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 17:51:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 17:51:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 18:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 18:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 18:38:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 18:38:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 19:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 19:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 19:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 19:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 20:04:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Autodiscover/Autodiscover.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-29 20:04:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Autodiscover/Autodiscover.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-29 20:22:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _ignition/execute-solution was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 20:22:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _ignition/execute-solution was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 20:23:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 20:23:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 20:29:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 20:29:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 20:50:26 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-04-29 20:50:26 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-04-29 21:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 21:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-29 22:25:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-29 22:25:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}