# Secondary contact is PER TRIP (passengers_log only)

Ramya trip 1 and Ramya trip 2 can have different S / N numbers.
Store and show only on that trip’s `passengers_log` document.
Do **not** write or read `passengers.secondary_phone`.

---

## 1) MODEL save — `application/classes/model/taxidispatch.php`

FIND `function save_secondary_phone` and REPLACE the whole function:

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

DELETE the `find_one` + `update(MDB_PASSENGERS, ...)` block if it is still there.

---

## 2) MODEL list $project — same file

In `dispatcher_booking_list`, `get_all_booking_list_all`, and `get_all_complete_booking_list_all`.

FIND:

```php
                    'secondary_phone' => array('$ifNull'=>array('$secondary_phone', array('$ifNull'=>array('$passengers.secondary_phone','')))),
                    'secondary_name' => array('$ifNull'=>array('$secondary_name', array('$ifNull'=>array('$passengers.secondary_name','')))),
                    'pass_secondary_phone' => array('$ifNull'=>array('$passengers.secondary_phone','')),
                    'pass_secondary_name' => array('$ifNull'=>array('$passengers.secondary_name','')),
```

REPLACE:

```php
                    'secondary_phone' => array('$ifNull'=>array('$secondary_phone','')),
                    'secondary_name' => array('$ifNull'=>array('$secondary_name','')),
```

`$secondary_phone` with no `passengers.` prefix is the trip row in `passengers_log`.

---

## 3) MODEL $group $push — manage_booking only

In `get_all_booking_list_all` and `get_all_complete_booking_list_all`, after `'passenger_phone'=>'$passenger_phone',`:

```php
                    'secondary_phone'=>'$secondary_phone',
                    'secondary_name'=>'$secondary_name',
```

You can leave old `pass_secondary_*` $push lines or delete them. Display no longer uses them.

---

## 4) CONTROLLER display — `application/classes/controller/taxidispatch.php`

In `secondary_contact_cell`, DELETE these fallbacks if present:

```php
        if ($phone === '') {
            $phone = $this->secondary_contact_scalar(isset($listings['pass_secondary_phone']) ? $listings['pass_secondary_phone'] : '');
        }
        if ($name === '') {
            $name = $this->secondary_contact_scalar(isset($listings['pass_secondary_name']) ? $listings['pass_secondary_name'] : '');
        }
```

Keep only:

```php
        $phone = $this->secondary_contact_scalar(isset($listings['secondary_phone']) ? $listings['secondary_phone'] : '');
        $name = $this->secondary_contact_scalar(isset($listings['secondary_name']) ? $listings['secondary_name'] : '');
```

---

## 5) Search (optional)

In the `$or` search, DELETE:

```php
                    array('passengers.secondary_phone'=>new MongoRegex("/$search_txt/i")),
                    array('passengers.secondary_name'=>new MongoRegex("/$search_txt/i")),
```

KEEP:

```php
                    array('secondary_phone'=>new MongoRegex("/$search_txt/i")),
                    array('secondary_name'=>new MongoRegex("/$search_txt/i")),
```

---

## Check

1. Dashboard: Ramya trip 1 → add S/N A. Trip 2 stays red / empty.
2. Trip 2 → add a different S/N. Trip 1 still shows A.
3. Compass: only that trip’s `passengers_log` document has `secondary_phone` / `secondary_name`. The `passengers` profile is not updated.
