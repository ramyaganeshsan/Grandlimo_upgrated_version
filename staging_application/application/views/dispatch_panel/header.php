<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<link rel="stylesheet" href="<?php echo URL_BASE; ?>public/bootstrap-3.2.0/vendor/bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" href="<?php echo URL_BASE; ?>public/bootstrap-3.2.0/vendor/bootstrap/css/style.css"/>
<link rel="stylesheet" href="<?php echo URL_BASE; ?>public/bootstrap-3.2.0/vendor/bootstrap/css/simple-sidebar.css"/>
<link rel="stylesheet" href="<?php echo URL_BASE; ?>public/bootstrap-3.2.0/dist/css/formValidation.css"/>
<link rel="stylesheet" href="<?php echo URL_BASE; ?>public/bootstrap-3.2.0/vendor/bootstrap/css/bootstrap-datetimepicker.css"/>
<link rel="stylesheet" href="<?php echo URL_BASE; ?>public/bootstrap-3.2.0/vendor/bootstrap/css/media_style.css"/>
<style>
    /* View-only dispatcher: same live dashboard layout, no add/edit/side menu */
    .view_only_dispatch .lft_outer,
    .view_only_dispatch #add_book_tab,
    .view_only_dispatch #edit_book_tab,
    .view_only_dispatch #ab_tab,
    .view_only_dispatch #eb_tab,
    .view_only_dispatch .sidebar-nav,
    .view_only_dispatch #wrapper { display: none !important; }

    .view_only_dispatch .col-md-4-inner {
        position: absolute !important;
        z-index: 12;
        width: auto !important;
        left: 8px;
        top: 8px;
        background: transparent !important;
        padding: 0 !important;
    }
    .view_only_dispatch .col-md-4-inner .nav-tabs {
        border: 0;
        background: #ea9c0e;
        display: inline-block;
        padding: 4px 8px;
        margin: 0;
    }
    .view_only_dispatch .col-md-4-inner .nav-tabs > li {
        float: left;
        margin: 0 4px 0 0;
    }
    .view_only_dispatch #map-section {
        width: calc(100% - 250px) !important;
        margin-left: 0 !important;
        float: left;
        padding-left: 0 !important;
        padding-right: 0 !important;
    }
    .view_only_dispatch .driver_status {
        width: 250px !important;
        float: right;
        right: 0;
        position: absolute;
        top: 52px;
        z-index: 8;
        background: #fff;
    }
    .view_only_dispatch ul.driver_details {
        list-style: none;
        margin: 0;
        padding: 0;
        clear: both;
    }
    .view_only_dispatch ul.driver_details li {
        display: block;
        clear: both;
        overflow: hidden;
        padding: 6px 8px;
        border-bottom: 1px solid #eee;
        position: relative;
    }
    .view_only_dispatch ul.driver_details li span {
        display: inline-block;
        vertical-align: middle;
        float: none;
        position: static;
    }
    .view_only_dispatch table.scroll {
        border-collapse: collapse;
        width: 100%;
        min-width: 1600px;
        table-layout: auto;
    }
    .view_only_dispatch table.scroll thead td,
    .view_only_dispatch table.scroll tbody td {
        position: static !important;
        float: none !important;
        display: table-cell !important;
        white-space: normal;
        word-break: break-word;
        vertical-align: top;
        padding: 6px 4px;
    }
    .view_only_dispatch .overflow-block_outer {
        overflow-x: auto !important;
        overflow-y: auto !important;
        width: 100%;
    }
    .view_only_dispatch #changetr thead td:last-child,
    .view_only_dispatch #changetr tbody td:nth-last-child(-n+2) {
        display: none !important;
    }
    .view_only_dispatch .manage_booking_bottom_scroll {
        width: 100% !important;
    }
    .taxi_dispatcher_inner .rgt_menu {
        text-align: right;
        padding-top: 12px;
    }
    .taxi_dispatcher_inner .rgt_menu ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .taxi_dispatcher_inner .rgt_menu li {
        display: inline-block;
        margin-left: 12px;
    }
</style>
<div class="loader">
    <div class="loader_inner">
        <div class="clearfix load_logo" style="margin-left: 35px; margin-bottom: 15px;">
            <img src="<?php echo URL_BASE; ?>public/uploads/site_logo/logo.png" alt="Logo">
        </div>
        <div class="clearfix"><img src="<?php echo URL_BASE; ?>public/css/img/ajax-loaders/294.gif" /></div>
    </div>
</div>
<div class="taxi_dispatcher_inner">
    <div class="row">
        <div class="col-lg-5"></div>
        <div class="col-md-6">
            <a href="<?php echo URL_BASE; ?>dispatch-panel/view-only" title="logo">
                <img src="<?php echo URL_BASE; ?>public/uploads/site_logo/logo.png" alt="Logo">
            </a>
        </div>
        <div class="col-lg-5 rgt_menu">
            <ul>
                <li><span><?php echo isset($_SESSION['name']) ? htmlspecialchars($_SESSION['name']) : 'View Dispatcher'; ?></span></li>
                <li><a href="<?php echo URL_BASE; ?>dispatch-panel/logout" title="Logout">Logout</a></li>
            </ul>
        </div>
    </div>
</div>
