<?php
defined('SYSPATH') OR die("No direct access allowed.");

$busy_slot_date = '';
$busy_slot_from_hour = '';
$busy_slot_to_hour = '';
$busy_slot_from_val = '';
$busy_slot_to_val = '';

if (isset($postvalue['busy_slot_from']) && $postvalue['busy_slot_from'] != '') {
    $busy_slot_from_val = $postvalue['busy_slot_from'];
    $busy_slot_date = substr($postvalue['busy_slot_from'], 0, 10);
    $busy_slot_from_hour = (string)((int)substr($postvalue['busy_slot_from'], 11, 2));
}
if (isset($postvalue['busy_slot_to']) && $postvalue['busy_slot_to'] != '') {
    $busy_slot_to_val = $postvalue['busy_slot_to'];
    $busy_slot_to_hour = (string)((int)substr($postvalue['busy_slot_to'], 11, 2));
    if ($busy_slot_date == '') {
        $busy_slot_date = substr($postvalue['busy_slot_to'], 0, 10);
    }
}

$submit_name = 'submit_add_busy_slot';
?>
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/css/ui-lightness/jquery-ui-1.8.11.custom.css" />
<script defer src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-1.5.1.min.js"></script>
<script defer src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-ui-1.8.11.custom.min.js"></script>
<script defer src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery-1.6.3.min.js"></script>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">
            <form method="POST" class="form" action="" name="add_busy_slot" id="add_busy_slot">
                <table class="0" cellpadding="5" cellspacing="0" width="85%">
                    <?php include APPPATH.'views/admin/busy_slot_fields.php'; ?>
                </table>
            </form>
        </div>
        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt" ></div></div>
    </div>
</div>
