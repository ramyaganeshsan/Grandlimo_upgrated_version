<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-02-18 00:08:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dqgqoeCXckuwPtxov was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 00:08:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dqgqoeCXckuwPtxov was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 00:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dqgqoeCXckuwPtxov was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 00:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dqgqoeCXckuwPtxov was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 00:23:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 00:23:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 01:02:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/modules/framework/amp_conf/htdocs/admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 01:02:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/modules/framework/amp_conf/htdocs/admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 01:58:48 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-18 01:58:48 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-18 02:39:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 02:39:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 02:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL portal was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 02:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL portal was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 04:51:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 04:51:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 05:45:42 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-18 05:45:42 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-18 06:17:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 06:17:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 06:17:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 06:17:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 06:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 06:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 07:19:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 07:19:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 07:22:18 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-18 07:22:18 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-18 07:23:34 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-18 07:23:34 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-18 08:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 08:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:11:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:11:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:26:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:26:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:33:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL FD873AC4-CF86-4FED-84EC-4BD59C6F17A7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 11:33:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL FD873AC4-CF86-4FED-84EC-4BD59C6F17A7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 11:34:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 11:34:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 11:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 11:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 11:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 11:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 11:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 11:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 11:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 11:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 11:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 11:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 11:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 11:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 11:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 11:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 11:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 11:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 12:07:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 12:07:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 12:34:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/welcome was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 12:34:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/welcome was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 12:55:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: RDWeb/Pages/en-US/default.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 12:55:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: RDWeb/Pages/en-US/default.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 12:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 12:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 13:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 13:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 13:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 13:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 13:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 13:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 13:25:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 13:25:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 13:30:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 13:30:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 13:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 13:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 14:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 14:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 14:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 14:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 14:32:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 14:32:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 14:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 14:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 15:28:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 15:28:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 15:28:41 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-18 15:28:41 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-18 15:30:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1739881816 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 15:30:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1739881816 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 15:30:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 15:30:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 15:30:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 15:30:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 15:30:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 15:30:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 15:30:38 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-18 15:30:38 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-18 15:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Fso4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 15:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Fso4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 16:12:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 16:12:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 16:12:58 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-18 16:12:58 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-18 17:12:06 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-18 17:12:06 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-18 17:37:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 17:37:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 18:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 18:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 18:39:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 18:39:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 18:39:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 18:39:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 18:39:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 18:39:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 18:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 18:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 18:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 18:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 18:39:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 18:39:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 18:40:36 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-18 18:40:36 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-18 18:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1739893236 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 18:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 18:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1739893236 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 18:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 18:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 18:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 18:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 18:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 18:40:38 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-18 18:40:38 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-18 18:40:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 18:40:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 19:32:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/home/js/check.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 19:32:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/home/js/check.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 19:32:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/admin/javascript/hetong.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 19:32:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/admin/javascript/hetong.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webclient was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 20:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webclient was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 20:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeweb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeweb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACK/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACK/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: APP/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: APP/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONT/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONT/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONTEND/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: FRONTEND/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twitter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: properties.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: properties.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACKEND/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACKEND/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BackEnd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BackEnd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.production/backup/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.production/backup/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: variables.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: variables.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:45:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/runtime-env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:45:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/runtime-env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/environment/local.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/environment/local.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/env/env.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/env/env.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.base ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.base ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.sample1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.sample1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.sample2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.sample2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/development.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/development.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: set-env.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: set-env.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/services/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/services/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/env.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/env.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/config/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/config/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/deploy_vars.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/deploy_vars.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/setup_vars.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/setup_vars.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.default ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.default ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env.test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env.test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/api_keys.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/api_keys.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/production.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/production.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/development.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/development.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/local.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/local.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env.stage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env.stage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/plugin-name/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/plugin-name/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:46:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:46:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:47:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:47:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:47:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:47:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:47:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:47:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:47:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:47:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:47:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:47:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/all/libraries/mailchimp/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/all/libraries/mailchimp/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/cloudflare/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/cloudflare/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/dzs-videogallery/class_parts/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/dzs-videogallery/class_parts/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/jekyll-exporter/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/jekyll-exporter/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/mm-plugin/inc/vendors/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/mm-plugin/inc/vendors/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 20:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 20:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:03:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webclient was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 21:03:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webclient was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 21:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 21:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 21:13:57 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-18 21:13:57 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-18 21:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 21:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 21:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/open ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/open ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Application/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Application/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:39:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:39:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:40:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:40:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: component/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: component/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterblockd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterblockd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: enviroments/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: enviroments/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:40:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extensions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:40:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extensions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpboot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: httpboot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js-plugin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js-plugin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:41:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main_user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:41:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main_user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ops/vagrant/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ops/vagrant/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: page-editor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: page-editor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: personal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: personal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:42:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: processor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:42:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: processor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:42:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:42:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smart-php/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smart-php/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/assembly/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/assembly/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/renderer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/renderer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_info/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_info/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 21:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 21:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 22:20:25 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-18 22:20:25 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-18 22:20:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1739906425 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 22:20:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1739906425 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 22:20:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 22:20:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 22:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 22:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 22:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-02-18 22:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-02-18 22:20:27 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-02-18 22:20:27 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-02-18 22:20:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 22:20:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-02-18 23:09:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-02-18 23:09:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}