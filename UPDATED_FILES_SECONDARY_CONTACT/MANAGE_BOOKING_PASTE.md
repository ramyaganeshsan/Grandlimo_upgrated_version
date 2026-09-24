# manage_booking red/empty secondary contact — paste this only

Dashboard already shows the saved name and phone. manage_booking does not,
because `$group` `$push` keeps `passenger_phone` and drops the secondary fields.

**File on live:** `application/classes/model/taxidispatch.php`

Search for this line **inside `$group` `$push`** (do it twice: `get_all_booking_list_all`
and `get_all_complete_booking_list_all`):

```php
                    'passenger_phone'=>'$passenger_phone',
```

Immediately after that line, paste:

```php
                    'secondary_phone'=>'$secondary_phone',
                    'secondary_name'=>'$secondary_name',
```

If those `$project` functions do **not** already have secondary fields, also paste
this after `'passenger_phone' => '$passengers.phone',`:

```php
                    'secondary_phone' => array('$ifNull'=>array('$secondary_phone','')),
                    'secondary_name' => array('$ifNull'=>array('$secondary_name','')),
```

Save. Refresh manage_booking. Icon green, `S :` / `N :` under the phone,
popup filled, Close only.

Do not recopy dashboard.php if dashboard already works.
