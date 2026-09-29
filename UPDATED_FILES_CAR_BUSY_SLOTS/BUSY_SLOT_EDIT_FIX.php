<?php
/* LIVE PECL mongo — FIND / REPLACE. Do not use UTCDateTime. Do not use * 1000.

================================================================
FILE 1 — application/classes/model/edit.php
FIND update_busy_slot (the function that fatals / writes wrong times)
REPLACE the whole function with this.
Use $this->mongodb if that is what add_busy_slot uses on live.
Copy the MongoDate lines from add_busy_slot if they look different.
================================================================ */

public function get_busy_slot($id)
{
    $result = $this->mongodb->find_one(MDB_BUSY_SLOT_TIMING, array('_id' => (int)$id));
    if (empty($result)) {
        return array();
    }
    if (isset($result['busy_slot_from']) || isset($result['busy_slot_to'])) {
        return array($result);
    }
    $result = iterator_to_array($result, false);
    return (!empty($result)) ? $result : array();
}

public function update_busy_slot($id, $post)
{
    $data = array(
        'busy_slot_from' => new MongoDate(strtotime($post['busy_slot_from'])),
        'busy_slot_to' => new MongoDate(strtotime($post['busy_slot_to']))
    );
    $result = $this->mongodb->update(MDB_BUSY_SLOT_TIMING, array('_id' => (int)$id), array('$set' => $data), array('upsert' => false));
    return (empty($result['err'])) ? 1 : 0;
}

/* ==============================================================
FILE 2 — application/views/admin/edit_busy_slot.php
Hour format MUST be G (0-23). Not g or h.
FIND the block that fills $busy_slot_date / hours from $slot
REPLACE with this.
============================================================== */

$busy_slot_date = '';
$busy_slot_from_hour = '';
$busy_slot_to_hour = '';
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
} else if (!empty($slot['busy_slot_from'])) {
    $busy_slot_date = trim(commonfunction::convertphpdate('Y-m-d', $slot['busy_slot_from']));
    $busy_slot_from_hour = (string)((int)commonfunction::convertphpdate('G', $slot['busy_slot_from']));
    $busy_slot_from_val = trim(commonfunction::convertphpdate('Y-m-d H:i:s', $slot['busy_slot_from']));
}

if (isset($postvalue['busy_slot_to']) && $postvalue['busy_slot_to'] != '') {
    $busy_slot_to_val = $postvalue['busy_slot_to'];
    $busy_slot_to_hour = (string)((int)substr($postvalue['busy_slot_to'], 11, 2));
    if ($busy_slot_date == '') {
        $busy_slot_date = substr($postvalue['busy_slot_to'], 0, 10);
    }
} else if (!empty($slot['busy_slot_to'])) {
    $busy_slot_to_hour = (string)((int)commonfunction::convertphpdate('G', $slot['busy_slot_to']));
    $busy_slot_to_val = trim(commonfunction::convertphpdate('Y-m-d H:i:s', $slot['busy_slot_to']));
    if ($busy_slot_date == '') {
        $busy_slot_date = trim(commonfunction::convertphpdate('Y-m-d', $slot['busy_slot_to']));
    }
}
