<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2024-12-27 00:37:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 00:37:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 00:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 00:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 01:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 01:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 02:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 02:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/deploy.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/deploy.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/inventory.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/inventory.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/playbook.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/playbook.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/roles/deploy/tasks/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/roles/deploy/tasks/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appspec.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appspec.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/deploy.ps1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/deploy.ps1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/deploy.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/deploy.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/install.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/install.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/setup.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/setup.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitbucket-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitbucket-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.gradle ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.gradle ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.gradle.kts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.gradle.kts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: buildspec.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: buildspec.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL capfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL capfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chef/deploy.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chef/deploy.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: circleci/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: circleci/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/deploy.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/deploy.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/deploy/production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/deploy/production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/deploy/staging.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/deploy/staging.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.bat ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.bat ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.groovy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.groovy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.ps1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.ps1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/development.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/development.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/production.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/production.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/staging.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/staging.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/terraform/main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/terraform/main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy-config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy-config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/k8s/deployment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/k8s/deployment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.deploy.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.deploy.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/deploy.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/deploy.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fabfile.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fabfile.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flux/deploy.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flux/deploy.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: heroku.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: heroku.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infrastructure/main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infrastructure/main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infrastructure/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infrastructure/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inventory.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inventory.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inventory.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inventory.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Jenkinsfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Jenkinsfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/deployment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/deployment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifests/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifests/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipeline.groovy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipeline.groovy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipeline.jenkins ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipeline.jenkins ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipeline.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipeline.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playbook.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playbook.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pom.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pom.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: puppet/deploy.pp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: puppet/deploy.pp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: puppet/manifests/site.pp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: puppet/manifests/site.pp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/backup.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/backup.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/deploy.bat ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/deploy.bat ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/deploy.ps1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/deploy.ps1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/deploy.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/deploy.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/deploy.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/deploy.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/install.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/install.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/release.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/release.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/setup.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/variables.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/variables.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/deploy.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/deploy.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: variables.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: variables.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vars.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vars.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 04:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wercker.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 04:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wercker.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:25:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:25:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:26:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 05:26:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 05:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _debug/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _debug/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 05:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 05:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aboutphp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aboutphp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: health/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: health/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info_php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info_php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: information/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: information/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: l.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: l.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linusadmin-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linusadmin-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localhost.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitoring/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: monitoring/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: path.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: path.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppath.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppath.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phptest.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sys/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sys/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: time.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: time.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: x.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 05:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xxx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 05:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xxx.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 06:10:22 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-27 06:10:22 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-27 06:11:07 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-27 06:11:07 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-27 06:11:13 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-27 06:11:13 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-27 06:11:43 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-27 06:11:43 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-27 06:15:10 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-27 06:15:10 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-27 06:16:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL BieL was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 06:16:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL BieL was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 06:16:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 4Hmt was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 06:16:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 4Hmt was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 06:16:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 06:16:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 06:16:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.slim.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 06:16:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.slim.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 06:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 06:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 06:16:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.2.slim.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 06:16:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.2.slim.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 06:19:20 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-27 06:19:20 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-27 06:21:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 06:21:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 06:21:58 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-27 06:21:58 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-27 06:25:26 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-12-27 06:25:26 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-12-27 07:10:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL FD873AC4-CF86-4FED-84EC-4BD59C6F17A7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 07:10:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL FD873AC4-CF86-4FED-84EC-4BD59C6F17A7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 07:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 07:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/assets/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/assets/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/settings.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/settings.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/compass.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/compass.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: capistrano/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: capistrano/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: capistrano/deploy.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: capistrano/deploy.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compass.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compass.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compass/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compass/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/boot.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/boot.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/compass.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/compass.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/development.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/development.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/staging.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/staging.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/test.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/test.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/god.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/god.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2024-12-27 08:38:04 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mongoid.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mongoid.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/newrelic.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/newrelic.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/puma.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/puma.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/redis.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/redis.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sidekiq.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sidekiq.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/thin.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/thin.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/unicorn.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/unicorn.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/warble.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/warble.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/deploy.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/deploy.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: engines/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: engines/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: features/support/env.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: features/support/env.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gems/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gems/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: guard/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: guard/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL guardfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL guardfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jekyll/_config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jekyll/_config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jekyll/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jekyll/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/tasks/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/tasks/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: middleman/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: middleman/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: padrino/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: padrino/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/assets/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/assets/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: puppet/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: puppet/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rack/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rack/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: railties/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: railties/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rake/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rake/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rakefiles/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rakefiles/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sass/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sass/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scss/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scss/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sinatra/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sinatra/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/spec_helper.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/spec_helper.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/support/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/support/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/compass.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/compass.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stylesheets/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tasks/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tasks/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/test_helper.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/test_helper.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/cache/assets/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/cache/assets/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unicorn/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unicorn/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/assets/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/assets/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/bundle/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/bundle/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/cache/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/cache/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/gems/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/gems/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/plugins/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/plugins/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 08:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack/config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 08:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 08:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 08:39:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 08:39:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 10:13:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 10:13:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 10:22:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 10:22:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 11:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 11:43:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 11:43:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 11:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db-backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db-backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appveyor.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appveyor.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bamboo-specs/bamboo.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bamboo-specs/bamboo.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud-config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud-config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s-secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s-secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes-secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes-secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: values-prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: values-prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm-secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm-secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: values-dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: values-dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/master.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/master.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/vars was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/vars was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swagger/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swagger/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gemfile.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gemfile.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: poetry.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: poetry.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install_log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install_log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jest.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jest.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: karma.conf.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: karma.conf.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: publish.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: publish.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: init.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: init.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restart.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stop.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stop.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restart.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: update.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: update.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: supervisord.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: supervisord.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache2.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache2.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-fpm.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-fpm.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pgadmin4.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pgadmin4.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqld.cnf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqld.cnf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my.cnf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my.cnf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.crt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.crt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa.pub ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa.pub ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL known_hosts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL known_hosts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL authorized_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL authorized_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WebServers.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WebServers.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataSources.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataSources.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ldap.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proxy.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ldap.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proxy.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: healthcheck.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: healthcheck.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: probe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: probe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elmah.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elmah.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crossdomain.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crossdomain.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: trace.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: trace.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localSettings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localSettings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-codes.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-codes.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2fa-backup.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2fa-backup.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 11:44:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 11:44:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:21:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 12:21:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 12:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/logs/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/logs/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/storage/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/storage/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/logs/exceptions.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/logs/exceptions.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug_log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 12:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug_log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 12:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL error_log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL error_log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error_log.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error_log.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/apache/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/apache/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/nginx/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/nginx/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/php-errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/php-errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/php/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/php/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/apache/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/apache/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/errors/php-error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/errors/php-error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/exception.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/exception.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/nginx/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/nginx/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/php-errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/php-errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/php-fpm.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/php-fpm.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/php.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/php.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/system.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/system.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/web.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/web.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.logs/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.logs/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: npm-debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: npm-debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime/debug/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime/debug/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/php-errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/php-errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL usr/local/apache/logs/error_log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL usr/local/apache/logs/error_log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL usr/local/apache2/logs/error_log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL usr/local/apache2/logs/error_log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/nginx/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/nginx/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/php/logs/php_errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/php/logs/php_errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/apache/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/apache/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/apache2/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/apache2/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL var/log/httpd/error_log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL var/log/httpd/error_log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/nginx/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/nginx/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/php-fpm/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/php-fpm/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/php/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/php/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/php_errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/php_errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/log/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/log/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/wc-logs/fatal-errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/wc-logs/fatal-errors.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/wc-logs/wc-error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/wc-logs/wc-error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn-debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn-debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn-error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn-error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 12:45:18 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-27 12:45:18 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-27 12:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 12:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 13:03:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 13:03:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 13:19:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 13:19:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 13:25:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 13:25:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 13:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 13:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 14:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/css/buttons.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 14:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/css/buttons.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 14:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/system/js/core.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 14:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/system/js/core.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 14:28:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 14:28:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 14:37:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agent/timeclock.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 14:37:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agent/timeclock.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 14:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agc/timeclock.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 14:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agc/timeclock.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 14:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 14:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 15:15:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 15:15:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 15:44:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 15:44:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 16:17:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 16:17:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 16:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 16:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 16:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 16:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/backend/awscloudformation/build/root-cloudformation-stack.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/backend/awscloudformation/build/root-cloudformation-stack.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL amplify/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL amplify/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/team-provider-info.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/team-provider-info.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL awscliv2/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL awscliv2/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL awsconfig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL awsconfig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL awscredentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL awscredentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL build/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL build/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk/cdk.context.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk/cdk.context.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdk/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdk/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: circleci/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: circleci/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL circleci/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL circleci/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation/template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cloudwatch/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cloudwatch/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.aws ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.aws ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws-secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws-secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.aws ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.aws ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL deploy/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL deploy/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dist/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dist/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL docker/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL docker/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dynamodb/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dynamodb/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL eb/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL eb/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ebextensions/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ebextensions/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ec2/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ec2/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ecs/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ecs/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL eks/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL eks/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticbeanstalk/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticbeanstalk/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL github/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL github/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/workflows/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/workflows/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gitlab/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gitlab/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL iam/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL iam/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL idea/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL idea/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jenkins/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jenkins/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL k8s/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL k8s/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kubernetes/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kubernetes/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lambda/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lambda/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pulumi/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pulumi/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pulumi/Pulumi.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pulumi/Pulumi.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rds/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rds/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL route53/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL route53/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL s3/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL s3/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam/samconfig.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam/samconfig.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scripts/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scripts/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL serverless/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL serverless/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless/serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless/serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/aws.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/aws.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/backend.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/backend.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/provider.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/provider.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tools/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tools/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL util/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL util/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL vscode/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL vscode/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workspace/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workspace/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 18:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL workspace/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 18:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL workspace/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 18:17:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 18:17:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:13:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:13:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 19:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 19:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL build/Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 19:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL build/Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 19:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/Chart.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/Chart.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/values.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/values.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compose/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compose/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/k8s/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/k8s/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/kubernetes/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/kubernetes/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/kubernetes/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/kubernetes/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/k8s/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/k8s/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/kubernetes/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/kubernetes/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/kubernetes/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/kubernetes/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/docker-compose.dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/docker-compose.dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/docker-compose.staging.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/docker-compose.staging.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/docker-compose.test.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/docker-compose.test.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/k8s/config.dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/k8s/config.dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/k8s/config.prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/k8s/config.prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/k8s/config.staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/k8s/config.staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/k8s/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/k8s/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/k8s/secrets.dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/k8s/secrets.dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/k8s/secrets.prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/k8s/secrets.prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/k8s/secrets.staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/k8s/secrets.staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/kubernetes/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/kubernetes/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/kubernetes/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/kubernetes/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.debug.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.debug.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.override.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.override.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.production.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.production.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.stage.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.stage.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.staging.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.staging.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.test.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.test.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/daemon.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/daemon.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL docker/Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL docker/Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/k8s/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/k8s/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/kubernetes/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/kubernetes/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/kubernetes/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/kubernetes/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/k8s/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/k8s/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/Chart.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/Chart.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values.dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values.dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values.prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values.prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values.staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values.staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/charts/values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/charts/values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/config.dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/config.dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/config.prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/config.prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/config.staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/config.staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/configmap.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/configmap.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/development/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/development/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/development/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/development/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/ingress.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/ingress.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/production/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/production/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/production/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/production/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/secrets.dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/secrets.dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/secrets.prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/secrets.prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/secrets.staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/secrets.staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/service.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/service.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/staging/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/staging/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/staging/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/staging/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kube/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kube/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kubeconfig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kubeconfig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/charts/values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/charts/values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kubernetes/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kubernetes/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/configmap.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/configmap.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/development/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/development/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/development/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/development/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/ingress.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/ingress.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/production/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/production/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/production/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/production/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/service.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/service.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/staging/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/staging/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/staging/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/staging/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL src/Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL src/Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: values.dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: values.dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: values.prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: values.prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: values.staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: values.staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: values.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: values.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 19:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 19:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 20:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1/project was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 20:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1/project was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 20:32:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 20:32:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 20:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 20:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-12-27 20:47:12 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-27 20:47:12 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-27 21:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 21:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 21:53:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 21:53:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 21:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 21:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 21:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-12-27 21:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-12-27 22:16:40 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-27 22:16:40 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-27 23:38:17 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2024-12-27 23:38:17 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-12-27 23:47:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-12-27 23:47:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}