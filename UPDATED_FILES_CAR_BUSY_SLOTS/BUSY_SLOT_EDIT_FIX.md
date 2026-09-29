# Why Add is right and Edit is wrong

Add stores Kuwait form time with live PECL mongo:

```php
new MongoDate(strtotime($post['busy_slot_from']))
```

`strtotime()` is seconds. `MongoDate` wants seconds. Manage then uses `convertphpdate()` → Kuwait. Correct.

Edit was pasted from the new PHP library:

```php
new \MongoDB\BSON\UTCDateTime(strtotime($post['busy_slot_from']) * 1000)
```

That class does not exist on live (fatal). If the class name was changed to `MongoDate` but `* 1000` was kept:

```php
new MongoDate(strtotime($post['busy_slot_from']) * 1000)  // WRONG
```

`MongoDate` still treats the number as **seconds**, so the timestamp is 1000× too big. Manage `convertphpdate()` then prints a wrong date/time. Add never had `* 1000`, so Add stays correct.

Second edit-only bug: the hour dropdown must use 24-hour `'G'`. `'g'` / `'h'` turn 12 AM into 12 PM (value 12). On submit, JS rebuilds the hidden fields from those dropdowns and overwrites the good values.

Fix: copy Add’s `MongoDate(strtotime(...))` lines into `update_busy_slot`. No `* 1000`. No `UTCDateTime`. Load hours with `'G'`.
