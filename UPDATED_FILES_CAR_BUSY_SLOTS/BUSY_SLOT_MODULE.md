# Car Busy Slot's module (`busy_slot_timing`)

Admin can add multiple From–To windows. Collection: `busy_slot_timing`.
Each document: `_id`, `busy_slot_from` (UTC), `busy_slot_to` (UTC).

Create the empty collection in Mongo if it does not exist:
`db.createCollection("busy_slot_timing")`

## PHP (Kohana)

Copy/update:
- `application/classes/table_config.php` — `MDB_BUSY_SLOT_TIMING`
- `application/classes/controller/add.php` — `action_busy_slot`
- `application/classes/controller/manage.php` — `action_busy_slot`, `action_delete_busy_slot`
- `application/classes/controller/edit.php` — `action_busy_slot`
- `application/classes/model/add.php` — `add_busy_slot`
- `application/classes/model/manage.php` — list/count/delete
- `application/classes/model/edit.php` — get/update
- `application/views/admin/add_busy_slot.php`
- `application/views/admin/edit_busy_slot.php`
- `application/views/admin/manage_busy_slot.php`
- `application/views/admin/busy_slot_fields.php`
- `application/views/admin/admin_menu.php`
- `application/i18n/en.php`
- Site Settings Car Busy Slot UI removed (`add_settings_site.php` + admin save)

Menu: General Settings → Car Busy Slot's → Add Busy Slot / Manage Busy Slot.

Form is the same as the old Site Settings widget: date, From, To, To after From, Kuwait display / UTC store.

## Node (savebooking checks EVERY row)

If `busy_slot_timing` has rows, those are used.
If the collection is empty, Node still falls back to the old `siteinfo` slot so existing 12 AM–4 AM keeps blocking until you add the first module row.

Live v8 paste:
1. `grandlimoV5/config/table_config.json` add `"MDB_BUSY_SLOT_TIMING": "busy_slot_timing"`
2. `models/passapimodel_v1.js` add `BusySlotTimings` (see `BUSY_SLOT_MODULE_PASTE.js`)
3. `routes/passengerapi_v1.js` load `global.busy_slots` after SiteSettings
4. Replace helpers at the bottom of `lib_v1/passenger/search_drivers.js`

Restart PHP and Node after paste.

Add the current 12 AM–4 AM window again in Add Busy Slot, then you can ignore siteinfo.
