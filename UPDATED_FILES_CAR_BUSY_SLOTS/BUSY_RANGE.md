# Busy slot reject message (Kuwait time)

When pickup is inside the slot, show Kuwait From–To, not UTC.

Example for 12 AM–4 AM Kuwait:

`All cars are busy in this time slot (31 October, 2026 12:00 AM - 4:00 AM). Please try after 4:00 AM.`

**File:** `grandlimoV5/lib_v1/passenger/search_drivers.js`
(same in `lib/passenger/search_drivers.js` if live)

FIND `function busySlotRejectMessage` and REPLACE with `BUSY_RANGE_PASTE.js`.

Restart Node. iOS/Android both get `message` from savebooking.
