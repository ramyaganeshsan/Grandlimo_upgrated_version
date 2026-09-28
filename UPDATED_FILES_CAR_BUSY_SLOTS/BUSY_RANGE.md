# Busy slot: parse app pickup as Kuwait

Live log from savebooking:

```
rawPickup: "31 October, 2026 03:03"
pickupUtc: "2026-10-31T03:03:00.000Z"   ← WRONG (treated as UTC)
busyFrom:  "2026-10-30T21:00:00.000Z"   ← 12 AM Kuwait (correct)
busyTo:    "2026-10-31T01:00:00.000Z"   ← 4 AM Kuwait (correct)
gteFrom: true, lteTo: false, inRange: false
```

Busy window is already UTC. Pickup format is `D MMMM, YYYY HH:mm` with no timezone.
Old `moment.tz(s, formats, true, "Asia/Kuwait")` did not match, then
`moment.tz(s, "Asia/Kuwait")` fell back to `Date()` → 03:03Z, which is after 01:00Z.

3:03 AM Kuwait must be `2026-10-31T00:03:00.000Z` (UTC+3) → inside 21:00Z–01:00Z.

**Files (same paste in both if both are live):**
- `grandlimoV5/lib_v1/passenger/search_drivers.js`
- `grandlimoV5/lib/passenger/search_drivers.js`

Restart Node after paste.

After this paste, `BUSY_SLOT_CHECK` for `31 October, 2026 03:03` must show:
`parsedFormat: "D MMMM, YYYY HH:mm"`, `pickupUtc: "2026-10-31T00:03:00.000Z"`, `inRange: true`.

12 AM, 00:17, 03:03, 03:50, 04:00 must reject. 04:01 must book.
