<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $page_title.' | '.SITENAME; ?></title>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyBxP4UEHJFGCbF-1inY3w79p1Kj95swe8Y&libraries=places,geometry" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo URL_BASE; ?>public/js/jquery1.11.0.js"></script>
    <script type="text/javascript" src="<?php echo URL_BASE; ?>public/bootstrap-3.2.0/vendor/bootstrap/js/jquery.min.js"></script>
    <script>
        var URL_BASE = "<?php echo URL_BASE; ?>";
    </script>
</head>
<body>
    <?php echo new View('dispatch_panel/header'); ?>
    <?php echo $content; ?>
</body>
</html>
