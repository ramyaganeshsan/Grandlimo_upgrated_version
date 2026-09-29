# Multi-slot savebooking (Node 8 live paste)

Keep the savebooking call as-is:

```
var busySlotMessage = busySlotRejectMessage(pickupTime || pickup_time);
```

Paste **all 4 files**. If you only replace `busySlotRejectMessage`, Node still reads siteinfo and ignores `busy_slot_timing`.

1. `grandlimoV5/config/table_config.json` — add `MDB_BUSY_SLOT_TIMING`
2. `grandlimoV5/models/passapimodel_v1.js` — add `BusySlotTimings` (callback, no async)
3. `grandlimoV5/routes/passengerapi_v1.js` — after siteinfo, load `global.busy_slots` then `next()`
4. `grandlimoV5/lib_v1/passenger/search_drivers.js` — FIND `function busySlotRejectMessage` REPLACE with the helpers in `BUSY_SLOT_MULTI_PASTE.js`

Same in `lib/` + `passapimodel.js` + `passengerapi.js` if those are live.

Restart Node.

Pickup still: naive string = Asia/Kuwait → UTC. Z/offset = as-is.
Compare inclusive From–To UTC against **every** `busy_slot_timing` row.
If pickup is in two overlapping slots, the error uses the slot that **ends later**.
If `busy_slot_timing` is empty, it still falls back to siteinfo `busy_slot_from` / `busy_slot_to`.
Error text is Kuwait time.
