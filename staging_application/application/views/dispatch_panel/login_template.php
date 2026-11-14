<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $page_title.' | '.SITENAME; ?></title>
    <link type="text/css" href="<?php echo URL_BASE; ?>public/admin/css/bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="<?php echo URL_BASE; ?>public/admin/css/admin_style.css" rel="stylesheet" />
    <link type="text/css" href="<?php echo URL_BASE; ?>public/admin/css/admin_reset.css" rel="stylesheet" />
</head>
<body class="nobg loginPage">
    <input type="hidden" name="baseurl" id="baseurl" value="<?php echo URL_BASE; ?>">
    <?php echo $content; ?>
</body>
</html>
