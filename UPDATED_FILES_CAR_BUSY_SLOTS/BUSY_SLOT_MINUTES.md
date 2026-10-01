# Car Busy Slot minutes (live paste)

Client: hourly blocks work; they need exact start/end (1 hour 20 mins, 1 hour 50 mins).

**Replace 3 PHP views.** Controllers/models stay the same. Hidden `busy_slot_from` / `busy_slot_to` are still naive Kuwait `Y-m-d H:i:s`. `strtotime()` + `MongoDate` already store UTC with minutes. Manage already prints `g:i A`. Node compare is UTC Date — no Node change.

## Files

1. `application/views/admin/busy_slot_fields.php` — **replace the whole file** with `BUSY_SLOT_FIELDS_MINUTES.php`
2. `application/views/admin/add_busy_slot.php` — FIND the variable block at the top, REPLACE with the block in `BUSY_SLOT_ADD_EDIT_MINUTES.php`
3. `application/views/admin/edit_busy_slot.php` — same FIND/REPLACE (edit also loads minutes with `convertphpdate('i', ...)`)

If Add and Edit do **not** include `busy_slot_fields.php` (form is inline), paste the From/To hour+min selects + JS from `BUSY_SLOT_FIELDS_MINUTES.php` into that view instead.

Hour and Minutes sit on one row (nested table + CSS). Replace `busy_slot_fields.php` again if you already pasted the first minutes version.

## After paste

- Add: date + From hour/min + To hour/min. Example: 1:00 AM → 2:20 AM
- Edit: existing `:00` slots still load; new minutes stay selected
- To must be after From (same hour is OK if To minutes are later)
- No Node restart
