<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2023-12-27 00:16:09 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-12-27 00:16:09 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-12-27 00:16:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 00:16:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 00:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 00:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 00:21:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 00:21:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 00:23:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 00:23:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 00:26:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 00:26:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 00:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 00:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 00:30:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 00:30:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 00:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 00:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 02:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 02:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 04:58:19 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-12-27 04:58:19 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-12-27 07:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 07:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 07:34:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-12-27 07:34:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-12-27 08:52:44 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-12-27 08:52:44 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-12-27 09:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/home/js/check.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 09:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/home/js/check.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 09:06:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/admin/javascript/hetong.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 09:06:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/admin/javascript/hetong.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 14:42:50 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-12-27 14:42:50 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-12-27 14:45:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-12-27 14:45:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-12-27 14:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-12-27 14:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-12-27 14:47:25 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-12-27 14:47:25 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-12-27 15:33:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-12-27 15:33:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-12-27 17:03:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 17:03:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 17:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-12-27 17:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-12-27 18:48:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/text/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2023-12-27 18:48:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/text/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-12-27 19:44:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-12-27 19:44:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-12-27 19:45:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-12-27 19:45:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-12-27 21:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/swiper.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/validation/jquery.validate.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap3.7.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/viewportchecker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.selectbox-0.2.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/timepicker/jquery.timepicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/simpledatetimepicker/jquery.simple-dtpicker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/wow.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.lightbox_me.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/owl.carousel.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/smoothscroll.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/jquery.fadethis.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/build/js/intlTelInput.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/datepicker/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.google.com/recaptcha/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gstatic.com/firebasejs/3.9.0/firebase.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 21:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 21:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/public/js/bootstrap-timepicker.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 23:12:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 23:12:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 23:15:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 23:15:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 23:16:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 23:16:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 23:19:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 23:19:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 23:20:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 23:20:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 23:22:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 23:22:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-12-27 23:24:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-12-27 23:24:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}