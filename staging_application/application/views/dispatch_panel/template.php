<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="<?php echo URL_BASE; ?>public/uploads/favicon/<?php echo SITE_FAVICON; ?>" type="image/x-icon" />
    <title><?php echo $page_title.' | '.SITENAME; ?></title>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyBxP4UEHJFGCbF-1inY3w79p1Kj95swe8Y&libraries=places,geometry" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo URL_BASE; ?>public/js/gmaps.js"></script>
    <script type="text/javascript" src="<?php echo URL_BASE; ?>public/js/jquery1.11.0.js"></script>
    <script type="text/javascript" src="<?php echo URL_BASE; ?>public/bootstrap-3.2.0/vendor/bootstrap/js/jquery.min.js"></script>
    <script>
        var MAP_COUNTRY = "<?php echo MAP_COUNTRY; ?>";
        var URL_BASE = "<?php echo URL_BASE; ?>";
        var IMGPATH = "<?php echo IMGPATH; ?>";
        var SHOW_MAP = "<?php echo SHOW_MAP; ?>";
        var ACTION = "<?php echo $action; ?>";
        var LOCATION_LATI = "<?php echo LOCATION_LATI; ?>";
        var LOCATION_LONG = "<?php echo LOCATION_LONG; ?>";
        var COMPANY_ID = "<?php echo isset($_SESSION['company_id']) ? $_SESSION['company_id'] : ''; ?>";
    </script>
</head>
<body>
    <input type="hidden" name="baseurl" id="baseurl" value="<?php echo URL_BASE; ?>">
    <?php echo new View('dispatch_panel/header'); ?>
    <div id="content">
        <div class="container_content">
            <?php echo $content; ?>
        </div>
    </div>
    <?php echo new View('dispatch_panel/footer'); ?>
</body>
</html>
