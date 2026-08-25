<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-07-07 00:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pscan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 00:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pscan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 00:07:53 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-07-07 00:07:53 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2/image.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2/image.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbdump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbdump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Archive.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Archive.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2/temp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2/temp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrators.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrators.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temporary.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temporary.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2/snapshot.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2/snapshot.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqllite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqllite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2/root.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2/root.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: os.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: os.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: middleware.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: middleware.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js_backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js_backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back_up.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back_up.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: websites.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: websites.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hapi.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hapi.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbase.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbase.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: express.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: express.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: koa.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: koa.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mux.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mux.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: migrations.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: migrations.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __pycache__.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __pycache__.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipenv.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipenv.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.go.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.go.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: python_server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: python_server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pkg.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pkg.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: handlers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: handlers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.go.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.go.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: golang_backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: golang_backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go_server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go_server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js_server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js_server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go.mod.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go.mod.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipfile.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipfile.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go.sum.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go.sum.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: router.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: router.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manage.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manage.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asgi.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asgi.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements.txt.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements.txt.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pydantic.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pydantic.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instance.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instance.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wsgi.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wsgi.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: venv.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: venv.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pyproject.toml.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pyproject.toml.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.xml.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.xml.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prettier.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prettier.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: target.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: target.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pom.xml.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pom.xml.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: eslint.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: eslint.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rollup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rollup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gradle.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gradle.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.gradle.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.gradle.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: python_backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: python_backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: angular.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: angular.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastapi.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastapi.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ruby.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ruby.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: META-INF.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: META-INF.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hugo.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hugo.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ru.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ru.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tsconfig.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tsconfig.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rakefile.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rakefile.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa.pub.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa.pub.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: springboot.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: springboot.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gemfile.lock.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gemfile.lock.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jekyll.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jekyll.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nestjs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nestjs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gemfile.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gemfile.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vercel.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vercel.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compose.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compose.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: java_backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: java_backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autoload.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autoload.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spring.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spring.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cert.pem.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cert.pem.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.pem.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.pem.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workspace.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workspace.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chi.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chi.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cicd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cicd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_key.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_key.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fiber.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fiber.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: editor.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: editor.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projects.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projects.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apikeys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apikeys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nest.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nest.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tokens.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tokens.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: babel.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsconfig.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsconfig.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: svelte.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: svelte.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql_dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql_dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:15:11 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-07 01:15:11 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-07 01:25:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.template ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:25:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.template ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:25:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/test.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:25:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/test.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:25:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:25:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cypress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cypress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:26:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.BAK ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:26:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.BAK ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.aws ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.aws ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: members/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: members/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.bkp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.bkp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.crt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.crt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:26:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:26:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:26:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:26:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:26:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:26:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:26:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask/env.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:26:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask/env.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:26:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/smtp.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:26:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/smtp.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:26:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:26:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:26:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:26:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:26:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.gcp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:26:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.gcp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:26:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:26:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:26:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:26:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:26:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.new ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:26:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.new ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:26:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 01:26:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 01:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 01:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 02:19:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/text/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-07 02:19:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/text/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 02:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 02:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 02:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 02:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 02:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 02:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:04:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:04:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:05:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:05:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:05:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:05:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:05:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:05:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:05:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:05:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:06:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:06:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:06:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:06:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:06:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:06:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:06:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:06:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:06:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:06:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:06:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:07:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:07:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:07:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:07:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:07:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:07:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:07:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:07:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:07:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:07:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:07:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:07:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:07:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:07:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:07:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:07:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:07:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:07:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:07:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:07:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:08:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:08:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:08:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:08:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:08:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:08:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/all/libraries/mailchimp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/all/libraries/mailchimp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:09:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/all/libraries/mailchimp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:09:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/all/libraries/mailchimp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:09:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:09:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:09:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:09:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:09:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:09:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:09:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:09:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:09:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:09:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:09:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:09:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:09:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:09:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:09:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:09:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:10:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:10:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:10:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:10:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:10:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:10:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:10:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:10:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:10:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:10:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:10:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:10:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:10:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:10:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:10:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:10:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:11:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:11:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:11:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:11:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:11:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:11:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:11:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:11:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:12:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:12:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:12:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:12:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:12:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:12:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:12:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:12:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:12:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:12:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:12:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:12:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:12:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:12:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:12:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:12:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:12:46 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-07 03:12:46 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-07 03:12:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:12:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:12:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:12:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:13:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:13:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:14:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:14:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:14:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:14:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:14:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:14:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:14:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:14:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:14:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:14:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 03:22:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 03:22:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 03:22:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 03:22:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 03:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 03:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 04:07:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/includes/general.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 04:07:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/includes/general.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 04:07:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/editor/separator.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 04:07:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/editor/separator.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 04:07:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 04:07:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 04:07:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 04:07:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 04:07:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 04:07:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 04:07:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 04:07:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 04:07:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 04:07:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 04:07:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 04:07:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 04:07:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 04:07:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 04:07:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 04:07:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 04:07:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 04:07:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 04:07:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 04:07:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 06:13:23 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2025-07-07 06:13:23 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-07-07 06:24:40 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2025-07-07 06:24:40 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2025-07-07 06:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goform/formJsonAjaxReq was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 06:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goform/formJsonAjaxReq was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 06:48:41 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-07 06:48:41 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-07 07:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 07:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 07:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 07:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 07:14:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL XcTM was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 07:14:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL XcTM was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 07:14:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 4Oeu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 07:14:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 4Oeu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 07:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 07:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 07:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.slim.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 07:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.slim.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 07:14:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 07:14:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 07:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.2.slim.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 07:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.2.slim.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 07:23:13 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2025-07-07 07:23:13 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2025-07-07 07:33:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 07:33:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 07:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 07:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 08:36:57 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2025-07-07 08:36:57 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2025-07-07 08:41:12 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2025-07-07 08:41:12 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2025-07-07 08:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 08:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 08:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 08:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 08:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 08:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 08:50:54 --- ERROR: ErrorException [ 8 ]: Undefined index: edit_pickup_date ~ APPPATH/classes/controller/taxidispatch.php [ 361 ]
2025-07-07 08:50:54 --- STRACE: ErrorException [ 8 ]: Undefined index: edit_pickup_date ~ APPPATH/classes/controller/taxidispatch.php [ 361 ]
--
#0 /var/www/html/application/classes/controller/taxidispatch.php(361): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 361, Array)
#1 [internal function]: Controller_Taxidispatch->action_dashboard()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-07-07 08:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 08:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 08:50:57 --- ERROR: ErrorException [ 8 ]: Undefined index: edit_pickup_date ~ APPPATH/classes/controller/taxidispatch.php [ 361 ]
2025-07-07 08:50:57 --- STRACE: ErrorException [ 8 ]: Undefined index: edit_pickup_date ~ APPPATH/classes/controller/taxidispatch.php [ 361 ]
--
#0 /var/www/html/application/classes/controller/taxidispatch.php(361): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 361, Array)
#1 [internal function]: Controller_Taxidispatch->action_dashboard()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Taxidispatch))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-07-07 08:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 08:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 08:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 08:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 09:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 09:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 09:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 09:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 09:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 09:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 09:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 09:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 09:45:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ewebeditor/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 09:45:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ewebeditor/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 10:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 10:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 10:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 10:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 10:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 10:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 10:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 10:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 10:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 10:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 10:40:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 10:40:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 10:40:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 10:40:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 10:40:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 10:40:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 10:40:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 10:40:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 10:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 10:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 10:40:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 10:40:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 10:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 10:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 10:40:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 10:40:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 10:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robomongo.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 10:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robomongo.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 10:41:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 10:41:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 10:41:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 10:41:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 10:41:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Admin/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-07 10:41:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Admin/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 10:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 10:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 10:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL en/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 10:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL en/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 10:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL st/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 10:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL st/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 10:41:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Crm was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 10:41:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Crm was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 10:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-protect/login.esp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 10:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-protect/login.esp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 12:18:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/Admin/css/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 12:18:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/Admin/css/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 12:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 12:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:03:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:03:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:10:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:10:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:10:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:10:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:11:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:11:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:12:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:12:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:12:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:12:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:12:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:12:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:12:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:12:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:12:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:12:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:13:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:13:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:13:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:13:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:13:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:13:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:13:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:13:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:13:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:13:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:13:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:13:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:13:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:13:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:14:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:14:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:14:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:14:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:14:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:14:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:14:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:14:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:14:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:14:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:14:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:14:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:14:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:14:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:14:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:14:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:15:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:15:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:15:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:15:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:15:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:15:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:15:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:15:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:15:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:15:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:15:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:15:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:15:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:15:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:15:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/all/libraries/mailchimp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:15:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/all/libraries/mailchimp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/all/libraries/mailchimp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/all/libraries/mailchimp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:16:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:16:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:16:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:16:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:16:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:16:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:16:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:16:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:16:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:16:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:16:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:16:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:16:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:16:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:16:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:16:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:16:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:16:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:16:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:16:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:17:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:17:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:17:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:17:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:17:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:17:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:17:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:17:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:17:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:17:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:17:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:17:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:17:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:17:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:17:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:17:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:18:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:18:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:18:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:18:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:18:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:18:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:18:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:18:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:18:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:18:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:18:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:18:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:19:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:19:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:19:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:19:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:19:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:19:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:19:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:19:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:19:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:19:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:19:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:19:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:19:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:19:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:19:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:19:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:19:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:19:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:19:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:19:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:20:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:20:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:20:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:20:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:20:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:20:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:20:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:20:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:21:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:21:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:21:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:21:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:21:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:21:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:21:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:21:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:21:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:21:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:22:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:22:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: audio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:22:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:22:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:22:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:22:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:22:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:22:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:22:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:22:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:23:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:23:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:23:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:23:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:23:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:23:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:23:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:23:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:23:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:23:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:23:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:23:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:24:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:24:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:24:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:24:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connector.sds ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 15:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connector.sds ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 15:41:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 15:41:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 16:32:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 16:32:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 16:47:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 16:47:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 16:58:10 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-07 16:58:10 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-07 18:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pscan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 18:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pscan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 18:05:09 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-07-07 18:05:09 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-07-07 19:08:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 19:08:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 19:08:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 19:08:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 19:08:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 19:08:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 19:08:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 19:08:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 19:08:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 19:08:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 19:08:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 19:08:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 19:08:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 19:08:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 19:08:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 19:08:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 19:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 19:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 19:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 19:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 19:08:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 19:08:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 19:08:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 19:08:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 19:08:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 19:08:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 19:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 19:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 20:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webshell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 20:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webshell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 20:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 20:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 20:53:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpn_logon.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 20:53:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpn_logon.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 21:13:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/main/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 21:13:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/main/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 21:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 21:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 21:30:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webshell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 21:30:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webshell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 21:31:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 21:31:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 21:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 21:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 21:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 21:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:05:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:05:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administration.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vercel.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vercel.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: os.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: os.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Archive.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Archive.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temporary.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temporary.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back_up.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back_up.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqllite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqllite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: venv.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: venv.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: migrations.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: migrations.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manage.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manage.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: python_backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: python_backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wsgi.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wsgi.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hapi.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hapi.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sqlite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lite.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.go.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.go.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: websites.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: websites.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: router.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: router.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrators.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrators.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: express.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: express.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: koa.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: koa.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: middleware.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: middleware.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: handlers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: handlers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pyproject.toml.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pyproject.toml.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastapi.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fastapi.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsconfig.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsconfig.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js_backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js_backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autoload.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autoload.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements.txt.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements.txt.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: target.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: target.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipenv.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipenv.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbdump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbdump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __pycache__.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __pycache__.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pkg.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pkg.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: python_server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: python_server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbase.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbase.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cert.pem.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cert.pem.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projects.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projects.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: META-INF.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: META-INF.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compose.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compose.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql_dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql_dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hugo.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hugo.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cicd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cicd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: editor.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: editor.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instance.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instance.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asgi.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: devops.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asgi.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.xml.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.xml.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_key.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_key.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js_server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js_server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pydantic.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pydantic.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apikeys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apikeys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipfile.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipfile.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa.pub.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa.pub.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.go.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.go.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.pem.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.pem.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workspace.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workspace.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tokens.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tokens.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nestjs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nestjs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nest.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nest.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 22:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 22:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 22:54:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 22:54:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 23:00:08 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-07 23:00:08 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-07 23:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connector.sds ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 23:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connector.sds ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 23:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 23:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 23:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 23:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 23:18:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 23:18:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 23:18:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 23:18:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-07 23:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-07 23:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-07 23:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-07 23:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}