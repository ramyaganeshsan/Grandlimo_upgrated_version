<?php
/* LIVE FIND / REPLACE — add minutes on Add / Edit busy slot.

================================================================
FILE 1 — application/views/admin/add_busy_slot.php
FIND the variable block at the top (through $submit_name = 'submit_add_busy_slot';)
REPLACE with this.
================================================================ */

$busy_slot_date = '';
$busy_slot_from_hour = '';
$busy_slot_to_hour = '';
$busy_slot_from_min = '';
$busy_slot_to_min = '';
$busy_slot_from_val = '';
$busy_slot_to_val = '';

if (isset($postvalue['busy_slot_from']) && $postvalue['busy_slot_from'] != '') {
    $busy_slot_from_val = $postvalue['busy_slot_from'];
    $busy_slot_date = substr($postvalue['busy_slot_from'], 0, 10);
    $busy_slot_from_hour = (string)((int)substr($postvalue['busy_slot_from'], 11, 2));
    $busy_slot_from_min = str_pad((string)((int)substr($postvalue['busy_slot_from'], 14, 2)), 2, '0', STR_PAD_LEFT);
}
if (isset($postvalue['busy_slot_to']) && $postvalue['busy_slot_to'] != '') {
    $busy_slot_to_val = $postvalue['busy_slot_to'];
    $busy_slot_to_hour = (string)((int)substr($postvalue['busy_slot_to'], 11, 2));
    $busy_slot_to_min = str_pad((string)((int)substr($postvalue['busy_slot_to'], 14, 2)), 2, '0', STR_PAD_LEFT);
    if ($busy_slot_date == '') {
        $busy_slot_date = substr($postvalue['busy_slot_to'], 0, 10);
    }
}

$submit_name = 'submit_add_busy_slot';

/* ==============================================================
FILE 2 — application/views/admin/edit_busy_slot.php
FIND the variable block at the top (through $submit_name = 'submit_edit_busy_slot';)
REPLACE with this. Hour format MUST stay G (0-23). Minutes use i.
================================================================ */

$busy_slot_date = '';
$busy_slot_from_hour = '';
$busy_slot_to_hour = '';
$busy_slot_from_min = '';
$busy_slot_to_min = '';
$busy_slot_from_val = '';
$busy_slot_to_val = '';
$slot = array();
if (isset($slot_details) && !empty($slot_details)) {
    if (!empty($slot_details[0]) && is_array($slot_details[0])) {
        $slot = $slot_details[0];
    } else if (!empty($slot_details['busy_slot_from']) || !empty($slot_details['busy_slot_to'])) {
        $slot = $slot_details;
    }
}

if (isset($postvalue['busy_slot_from']) && $postvalue['busy_slot_from'] != '') {
    $busy_slot_from_val = $postvalue['busy_slot_from'];
    $busy_slot_date = substr($postvalue['busy_slot_from'], 0, 10);
    $busy_slot_from_hour = (string)((int)substr($postvalue['busy_slot_from'], 11, 2));
    $busy_slot_from_min = str_pad((string)((int)substr($postvalue['busy_slot_from'], 14, 2)), 2, '0', STR_PAD_LEFT);
} else if (!empty($slot['busy_slot_from'])) {
    $busy_slot_date = trim(commonfunction::convertphpdate('Y-m-d', $slot['busy_slot_from']));
    $busy_slot_from_hour = (string)((int)commonfunction::convertphpdate('G', $slot['busy_slot_from']));
    $busy_slot_from_min = trim(commonfunction::convertphpdate('i', $slot['busy_slot_from']));
    $busy_slot_from_val = trim(commonfunction::convertphpdate('Y-m-d H:i:s', $slot['busy_slot_from']));
}

if (isset($postvalue['busy_slot_to']) && $postvalue['busy_slot_to'] != '') {
    $busy_slot_to_val = $postvalue['busy_slot_to'];
    $busy_slot_to_hour = (string)((int)substr($postvalue['busy_slot_to'], 11, 2));
    $busy_slot_to_min = str_pad((string)((int)substr($postvalue['busy_slot_to'], 14, 2)), 2, '0', STR_PAD_LEFT);
    if ($busy_slot_date == '') {
        $busy_slot_date = substr($postvalue['busy_slot_to'], 0, 10);
    }
} else if (!empty($slot['busy_slot_to'])) {
    $busy_slot_to_hour = (string)((int)commonfunction::convertphpdate('G', $slot['busy_slot_to']));
    $busy_slot_to_min = trim(commonfunction::convertphpdate('i', $slot['busy_slot_to']));
    $busy_slot_to_val = trim(commonfunction::convertphpdate('Y-m-d H:i:s', $slot['busy_slot_to']));
    if ($busy_slot_date == '') {
        $busy_slot_date = trim(commonfunction::convertphpdate('Y-m-d', $slot['busy_slot_to']));
    }
}

$submit_name = 'submit_edit_busy_slot';
