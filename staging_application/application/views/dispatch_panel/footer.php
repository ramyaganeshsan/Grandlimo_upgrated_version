<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<script type="text/javascript" src="<?php echo URL_BASE; ?>public/bootstrap-3.2.0/vendor/bootstrap/js/mainbase.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("fast");
});

$(document).ready(function() {
    $(':checkbox:not("#fare_type"):not(".surge_pricing_manual_interval"):not(".surge_pricing_custom_interval")').each(function() {
        this.checked = true;
    });

    var blog_height = $(window).height();
    $(".lft_outer").css({ 'height': blog_height, 'overflow-y': 'hidden' });
    var blog_height = $(window).height() - 379;
    $(".driver_status_height").css({ 'height': blog_height, 'overflow-y': 'hidden' });
    var blog_width = $(window).width();
    $(".manage_booking_bottom_outer").css({ 'width': blog_width, 'overflow-y': 'hidden' });
    var manage_booking_bottom = ($(window).width() * 80) / 100;
    $(".manage_booking_bottom_scroll").css({ 'width': manage_booking_bottom, 'overflow-y': 'hidden' });
    var map_height = ($(window).height() * 60) / 100;
    var dr_status_height = ($(window).height() * 36) / 100;
    $(".driver_status_height_outer_bottom").css({ 'height': dr_status_height, 'overflow-y': 'hidden' });
    $(".driver_status_height_outer_top").css({ 'height': map_height, 'overflow-y': 'hidden' });
    var blog_height = $(window).height() - 430;
    $(".all_booking_manage_scroll").css({ 'height': blog_height, 'overflow-y': 'scroll' });
    var blog_height = $(window).height() - 420;
    $("#taxi_scroll_one").css({ 'height': blog_height, 'overflow-y': 'scroll' });

    if (typeof $.fn.enscroll === 'function') {
        $('#taxi_scroll_one,.all_booking_manage_scroll').enscroll({
            showOnHover: false,
            verticalTrackClass: 'track3',
            verticalHandleClass: 'handle3'
        });
    }

    $(window).on('resize', function() {
        var blog_width = $(window).width();
        $(".manage_booking_bottom_outer").css({ 'width': blog_width, 'overflow-y': 'hidden' });
        var manage_booking_bottom = ($(window).width() * 80) / 100;
        $(".manage_booking_bottom_scroll").css({ 'width': manage_booking_bottom, 'overflow-y': 'hidden' });
        var map_height = ($(window).height() * 60) / 100;
        $(".driver_status_height_outer_top").css({ 'height': map_height, 'overflow-y': 'hidden' });
    });
});
</script>
