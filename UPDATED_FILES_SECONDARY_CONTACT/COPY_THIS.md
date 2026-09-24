# Secondary name + phone — copy onto LIVE (do not git-merge)

One popup. Same look as the original dashboard (black Save / tomato Cancel).
Green icon when a **phone number** exists. Name + phone are both required to Save.

Secondary contact is **per trip** on `passengers_log` only. Same passenger,
two bookings → two different numbers. See `PER_TRIP_PASTE.md`.

---

## DO THIS NOW — manage_booking empty red icon

Dashboard already has the saved secondary name/phone. manage_booking still
shows a **red icon and empty popup** because its list query `$group` `$push`
keeps `passenger_phone` and **throws away** `secondary_phone` / `secondary_name`.

**File:** `application/classes/model/taxidispatch.php`

Search for this exact line **inside `$group` / `$push`** (there are two copies:
`get_all_booking_list_all` and `get_all_complete_booking_list_all`):

```php
                    'passenger_phone'=>'$passenger_phone',
```

Paste these 4 lines **immediately after** that line, in **both** `$group` blocks:

```php
                    'secondary_phone'=>'$secondary_phone',
                    'secondary_name'=>'$secondary_name',
```

Also confirm the `$project` in those same two functions still has this right
after `'passenger_phone' => '$passengers.phone',`:

```php
                    'secondary_phone' => array('$ifNull'=>array('$secondary_phone','')),
                    'secondary_name' => array('$ifNull'=>array('$secondary_name','')),
```

Save the model. Refresh manage_booking. The icon should be green, the cell
should show `S : {phone}` and `N : {name}`, and the popup should be filled
(view only, Close button).

Do **not** paste dashboard.php again if dashboard already works.

---

## BEFORE ANY PASTE — DELETE old code on live

If you skip this, you get the old black/tomato popup with no name field,
duplicate icons, or `Cannot redeclare action_save_secondary_phone`.

### dashboard.php — DELETE these 3 things

**1. Delete the OLD popup HTML** that starts with:

```
<div ... id="secondaryPhoneModel">
```

Delete from that `<div` through its matching `</div></div>` (the white box
with only Phone Number + Save + Cancel). Also delete `#secContactOverlay`
if you pasted that yellow popup at the bottom.

**2. Delete the OLD javascript** that starts with:

```
var savedSecondaryPhones = {};
function addPassengerPhoneIcons() {
```

Delete from `var savedSecondaryPhones` all the way through the click binder:

```
$(document).on('click', '.passenger-phone-icon', function (e) {
    ...
    handleOpenSecondaryPhonePopup(tripId, existingPhone);
});
```

Do **not** delete `$('#all_booking_manage_list').html(data[1]);`

**3. Keep / fix only this** after the list html:

```javascript
                    $('#all_booking_manage_list').html(data[1]);
                    addPassengerPhoneIcons();
                    $('.oddtr').bind('click', function(e) {
                        if ($(e.target).closest('.passenger-phone-icon, .sec-phone-icon').length) { return; }
```

### controller taxidispatch.php — only ONE save method

Search for `function action_save_secondary_phone`. If it appears twice,
delete the old copy (the one that only reads `secondary_phone` and has
no `secondary_name`). Keep the new one at the bottom of the class.

If you already have `function secondary_contact_cell`, replace that whole
function with the new one below (green when phone exists).

---

## FILE A — new view file

Create this file on live:

`application/views/admin/taxi_dispatch/secondary_contact_popup.php`

Copy the full contents from `secondary_contact_popup.php` in this folder.

---

## FILE B — dashboard.php

After the **last** `</script>` at the bottom of dashboard.php, add exactly
this one line (outside the script, as PHP):

```php
<?php include APPPATH . 'views/admin/taxi_dispatch/secondary_contact_popup.php'; ?>
```

If you cannot use include, paste the **full** contents of
`secondary_contact_popup.php` in that same place instead.

---

## FILE C — manage_booking.php

1. After `$('#all_booking_manage_list_all').html(response);` use this (not the old icon function):

```javascript
					$('#all_booking_manage_list_all').html(response);
					setTimeout(function(){
						if (typeof renderSecondaryContacts === 'function') {
							renderSecondaryContacts();
						}
					}, 80);
```

2. Change `.oddtr` click to:

```javascript
					$('.oddtr').on('click', function(e){
						if ($(e.target).closest('.passenger-phone-icon, .sec-phone-icon').length) { return; }
```

3. After the last `</script>` add the same include:

```php
<?php include APPPATH . 'views/admin/taxi_dispatch/secondary_contact_popup.php'; ?>
```

---

## FILE D — controller

**Path:** `application/classes/controller/taxidispatch.php`

### Dashboard row (`action_all_booking_list_manage`)

If you still have the old 4-line icon block, delete it:

```php
                $secondary_phone = isset($listings['secondary_phone']) ? trim($listings['secondary_phone']) : '';
                $secondary_phone_attr = htmlspecialchars($secondary_phone, ENT_QUOTES);
                $phone_icon_color = ($secondary_phone != '') ? '#0a7c2f' : 'red';
                $phone_icon = '...';
                $secondary_phone_html = ...
                $op[] .= '<td width="10%">' . $phone_icon . $passenger_phone . $secondary_phone_html . '</td>';
```

Replace the phone `<td>` with:

```php
                $op[] .= '<td width="10%">' . $this->secondary_contact_cell($listings, $passenger_phone, 0) . '</td>';
```

### manage_booking row (`action_all_booking_list_manage_all`)

```php
                $op[] .= '<td width="10%">' . $this->secondary_contact_cell($listings, $passenger_phone, 1) . '</td>';
```

(`1` = view only, Close button, no Save)

### Replace / add these TWO methods once at the end of the class, before the last `}`

```php
    public function secondary_contact_cell($listings, $passenger_phone, $view_only = 0)
    {
        $trip_id = isset($listings['pass_logid']) ? $listings['pass_logid'] : '';
        $phone = isset($listings['secondary_phone']) ? $listings['secondary_phone'] : '';
        $name = isset($listings['secondary_name']) ? $listings['secondary_name'] : '';
        if (is_array($phone)) { $phone = isset($phone[0]) ? $phone[0] : ''; }
        if (is_array($name)) { $name = isset($name[0]) ? $name[0] : ''; }
        $phone = htmlspecialchars(trim((string)$phone), ENT_QUOTES);
        $name = htmlspecialchars(trim((string)$name), ENT_QUOTES);
        $has_phone = ($phone !== '');
        $color = $has_phone ? '#0a7c2f' : 'red';
        $mode = $view_only ? 'view' : 'edit';
        $icon = '<span class="passenger-phone-icon sec-phone-icon" data-mode="'.$mode.'" data-trip-id="'.$trip_id.'" data-secondary-phone="'.$phone.'" data-sec-phone="'.$phone.'" data-sec-name="'.$name.'" title="Secondary contact" onclick="event.stopPropagation(); openSecondaryContact(this);" style="cursor:pointer;margin-right:5px;vertical-align:middle;display:inline-block;"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" viewBox="0 0 24 24" fill="'.$color.'"><path d="M17 1.01L7 1c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-1.99-2-1.99zM17 19H7V5h10v14z"/></svg></span>';
        $extra = '';
        if ($phone !== '' || $name !== '') {
            $extra = '<div class="sec-phone-text secondary-phone-text" style="font-size:11px;color:#555;line-height:14px;margin-top:3px;">';
            if ($phone !== '') { $extra .= 'S : '.$phone; }
            if ($phone !== '' && $name !== '') { $extra .= '<br/>'; }
            if ($name !== '') { $extra .= 'N : '.$name; }
            $extra .= '</div>';
        }
        return $icon . $passenger_phone . $extra;
    }

    public function action_save_secondary_phone()
    {
        $this->is_login();
        $trip_id = isset($_POST['trip_id']) ? (int)$_POST['trip_id'] : 0;
        $secondary_phone = isset($_POST['secondary_phone']) ? trim($_POST['secondary_phone']) : '';
        $secondary_name = isset($_POST['secondary_name']) ? trim($_POST['secondary_name']) : '';
        header('Content-Type: application/json');
        if ($trip_id <= 0 || $secondary_phone == '' || $secondary_name == '') {
            echo json_encode(array('status' => 0, 'message' => 'Name and phone are required'));
            exit;
        }
        $this->tdispatch_model->save_secondary_phone($trip_id, $secondary_phone, $secondary_name);
        echo json_encode(array(
            'status' => 1,
            'message' => 'Secondary number saved.',
            'secondary_phone' => $secondary_phone,
            'secondary_name' => $secondary_name
        ));
        exit;
    }
```

---

## FILE E — model

**Path:** `application/classes/model/taxidispatch.php`

### After `'passenger_phone' => '$passengers.phone',` in `dispatcher_booking_list`, `get_all_booking_list_all`, AND `get_all_complete_booking_list_all` `$project`:

```php
                    'secondary_phone' => array('$ifNull'=>array('$secondary_phone','')),
                    'secondary_name' => array('$ifNull'=>array('$secondary_name','')),
```

### After `'passenger_phone'=>'$passenger_phone',` in the `$group` `$push` of `get_all_booking_list_all` AND `get_all_complete_booking_list_all`:

This is the manage_booking red-icon fix. If you skip it, `$project` finds the secondary fields and `$group` throws them away.

```php
                    'secondary_phone'=>'$secondary_phone',
                    'secondary_name'=>'$secondary_name',
```

### After `array('passengers.phone'=>new MongoRegex("/$search_txt/i")),` in `get_all_booking_list_all` (and complete list if used):

```php
                    array('secondary_phone'=>new MongoRegex("/$search_txt/i")),
                    array('secondary_name'=>new MongoRegex("/$search_txt/i")),
```

### REPLACE the existing `save_secondary_phone` function (do not add a second one)

```php
    public function save_secondary_phone($trip_id, $secondary_phone, $secondary_name)
    {
        $trip_id = (int)$trip_id;
        $secondary_phone = trim($secondary_phone);
        $secondary_name = trim($secondary_name);
        $set = array(
            'secondary_phone' => $secondary_phone,
            'secondary_name' => $secondary_name
        );
        $this->mongo_db->update(MDB_PASSENGERS_LOGS, array('_id' => $trip_id), array('$set' => $set));
        return 1;
    }
```

---

## After save

Dashboard: green icon + `S : {phone}` and `N : {name}` under the primary phone.
manage_booking: same display, popup is view-only (Close only).
Search matches secondary phone and secondary name.
Writes `secondary_phone` / `secondary_name` on that trip’s `passengers_log` only.
Same passenger, two trips → two different secondary numbers.
