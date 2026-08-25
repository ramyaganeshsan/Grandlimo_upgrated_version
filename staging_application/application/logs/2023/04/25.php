<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2023-04-25 01:22:17 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-04-25 01:22:17 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-04-25 01:53:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sugar_version.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 01:53:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sugar_version.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:25:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2023-04-25 03:25:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:25:35 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2023-04-25 03:25:35 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:25:35 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2023-04-25 03:25:35 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:25:36 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
2023-04-25 03:25:36 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:25:36 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
2023-04-25 03:25:36 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 03:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 03:25:36 --- ERROR: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
2023-04-25 03:25:36 --- STRACE: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:25:36 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2023-04-25 03:25:36 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:25:36 --- ERROR: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
2023-04-25 03:25:36 --- STRACE: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
--
#0 /var/www/html/application/classes/controller/company.php(959): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 959, Array)
#1 [internal function]: Controller_Company->action_getfreetrial()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Company))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:25:36 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2023-04-25 03:25:36 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:22 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2023-04-25 03:26:22 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:26:22 --- ERROR: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
2023-04-25 03:26:22 --- STRACE: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 03:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 03:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:22 --- ERROR: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
2023-04-25 03:26:22 --- STRACE: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
--
#0 /var/www/html/application/classes/controller/company.php(959): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 959, Array)
#1 [internal function]: Controller_Company->action_getfreetrial()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Company))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:22 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2023-04-25 03:26:22 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:23 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2023-04-25 03:26:23 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:26:23 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2023-04-25 03:26:23 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:26:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2023-04-25 03:26:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:26:23 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
2023-04-25 03:26:23 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:26:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:23 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
2023-04-25 03:26:23 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:26:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 03:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 03:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:51 --- ERROR: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
2023-04-25 03:26:51 --- STRACE: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:51 --- ERROR: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
2023-04-25 03:26:51 --- STRACE: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
--
#0 /var/www/html/application/classes/controller/company.php(959): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 959, Array)
#1 [internal function]: Controller_Company->action_getfreetrial()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Company))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:52 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
2023-04-25 03:26:52 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:26:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:26:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:26:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2023-04-25 03:26:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:26:52 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2023-04-25 03:26:52 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:26:52 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2023-04-25 03:26:52 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:26:52 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2023-04-25 03:26:52 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:26:52 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2023-04-25 03:26:52 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:26:52 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
2023-04-25 03:26:52 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:18 --- ERROR: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
2023-04-25 03:27:18 --- STRACE: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
--
#0 /var/www/html/application/classes/controller/company.php(959): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 959, Array)
#1 [internal function]: Controller_Company->action_getfreetrial()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Company))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:18 --- ERROR: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
2023-04-25 03:27:18 --- STRACE: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:18 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
2023-04-25 03:27:18 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:27:19 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2023-04-25 03:27:19 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:27:19 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2023-04-25 03:27:19 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:27:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2023-04-25 03:27:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:27:19 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
2023-04-25 03:27:19 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:27:19 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2023-04-25 03:27:19 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:27:19 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2023-04-25 03:27:19 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:58 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2023-04-25 03:27:58 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:58 --- ERROR: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
2023-04-25 03:27:58 --- STRACE: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:27:58 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2023-04-25 03:27:58 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:58 --- ERROR: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
2023-04-25 03:27:58 --- STRACE: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
--
#0 /var/www/html/application/classes/controller/company.php(959): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 959, Array)
#1 [internal function]: Controller_Company->action_getfreetrial()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Company))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 03:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 03:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:27:58 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2023-04-25 03:27:58 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:27:58 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2023-04-25 03:27:58 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:27:59 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
2023-04-25 03:27:59 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:27:59 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
2023-04-25 03:27:59 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:27:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2023-04-25 03:27:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:28:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2023-04-25 03:28:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:28:38 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2023-04-25 03:28:38 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:28:38 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
2023-04-25 03:28:38 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1531 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:28:38 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
2023-04-25 03:28:38 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1525 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:28:38 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2023-04-25 03:28:38 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:28:38 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2023-04-25 03:28:38 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 03:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 03:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:28:38 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2023-04-25 03:28:38 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 03:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 03:28:39 --- ERROR: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
2023-04-25 03:28:39 --- STRACE: ErrorException [ 8 ]: Undefined index: time_zone ~ APPPATH/classes/controller/company.php [ 959 ]
--
#0 /var/www/html/application/classes/controller/company.php(959): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 959, Array)
#1 [internal function]: Controller_Company->action_getfreetrial()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Company))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2023-04-25 03:28:39 --- ERROR: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
2023-04-25 03:28:39 --- STRACE: ErrorException [ 1 ]: Class 'Db' not found ~ APPPATH/classes/model/company.php [ 1818 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2023-04-25 03:30:26 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-04-25 03:30:26 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-04-25 03:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 03:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 04:10:10 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-04-25 04:10:10 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-04-25 05:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 05:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 07:24:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 07:24:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 07:38:04 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-04-25 07:38:04 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-04-25 07:47:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 07:47:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 09:38:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 09:38:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 10:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 10:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 10:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mz/70970.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 10:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mz/70970.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 12:51:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 12:51:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 13:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 13:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 13:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 13:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 13:20:59 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-04-25 13:20:59 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-04-25 13:24:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 13:24:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 15:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 15:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 18:38:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 18:38:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 19:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 19:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 20:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 20:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 20:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 20:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 20:40:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/text/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2023-04-25 20:40:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/text/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 21:13:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2023-04-25 21:13:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 23:06:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL client/get_targets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 23:06:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL client/get_targets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 23:06:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 23:06:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 23:06:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 23:06:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 23:06:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 23:06:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 23:34:42 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-04-25 23:34:42 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-04-25 23:34:42 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-04-25 23:34:42 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-04-25 23:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 23:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 23:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 23:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 23:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 23:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 23:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1682454882 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 23:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1682454882 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 23:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 23:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 23:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 23:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 23:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL InCb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 23:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL InCb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 23:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 23:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 23:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 23:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 23:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 23:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 23:34:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 23:34:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 23:34:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 23:34:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 23:34:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 23:34:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 23:34:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 23:34:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-04-25 23:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 23:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 23:34:54 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-04-25 23:34:54 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-04-25 23:40:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-04-25 23:40:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-04-25 23:41:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-04-25 23:41:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}