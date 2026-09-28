# Busy slot must block EVERY pickup from From through To (Kuwait)

12 AM–4 AM Kuwait stores as `21:00Z`–`01:00Z`.
`new Date("2026-10-31 03:50:00")` on a UTC Node process is 03:50 UTC,
which is outside that window, so 3:50 AM and 4:00 AM were allowed.
00:17 is inside 21:00Z–01:00Z, so only times near midnight were blocked.

**Files (same paste in both if both are live):**
- `grandlimoV5/lib_v1/passenger/search_drivers.js`
- `grandlimoV5/lib/passenger/search_drivers.js`

**1) In `exports.savebooking`** after `pickup_time` is read, REPLACE any old
busy-slot `new Date(pickupTime)` compare with:

```js
    var busySlotMessage = busySlotRejectMessage(pickupTime || pickup_time);
    if (busySlotMessage) {
      message.message = busySlotMessage;
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      return deferred.promise;
    }
```

**2) Paste these 3 functions at the BOTTOM of the same file.**
Need `var moment = require("moment-timezone");` at the top (already there).

```js
function mongoSettingToDate(value) {
  if (value === undefined || value === null || value === "") {
    return null;
  }
  if (value instanceof Date) {
    return isNaN(value.getTime()) ? null : value;
  }
  if (typeof value === "object") {
    if (value.$date) {
      return mongoSettingToDate(value.$date);
    }
    if (typeof value.toDate === "function") {
      try {
        var converted = value.toDate();
        if (converted instanceof Date && !isNaN(converted.getTime())) {
          return converted;
        }
      } catch (e) {}
    }
    if (typeof value.getTime === "function") {
      var millis = value.getTime();
      if (typeof millis === "number" && !isNaN(millis)) {
        return new Date(millis);
      }
    }
    if (value.sec != null) {
      return new Date(Number(value.sec) * 1000);
    }
  }
  var parsed = new Date(value);
  return isNaN(parsed.getTime()) ? null : parsed;
}

function pickupToUtcDate(raw) {
  if (raw === undefined || raw === null || raw === "") {
    return null;
  }
  var s = String(raw);
  try {
    s = decodeURIComponent(s);
  } catch (e) {}
  s = s.replace(/\+/g, " ").replace(/%20/g, " ").trim();
  if (!s) {
    return null;
  }
  if (/[zZ]|[+\-]\d{2}:?\d{2}$/.test(s)) {
    var alreadyUtc = new Date(s);
    return isNaN(alreadyUtc.getTime()) ? null : alreadyUtc;
  }
  var formats = [
    "YYYY-MM-DD HH:mm:ss",
    "YYYY-MM-DD HH:mm",
    "YYYY-MM-DDTHH:mm:ss",
    "YYYY-MM-DDTHH:mm",
    "YYYY-MM-DD hh:mm:ss A",
    "YYYY-MM-DD hh:mm A",
    "YYYY-MM-DD h:mm:ss A",
    "YYYY-MM-DD h:mm A",
  ];
  var kuwaitPickup = moment.tz(s, formats, true, "Asia/Kuwait");
  if (!kuwaitPickup.isValid()) {
    kuwaitPickup = moment.tz(s, "Asia/Kuwait");
  }
  return kuwaitPickup.isValid() ? kuwaitPickup.toDate() : null;
}

function busySlotRejectMessage(pickupRaw) {
  var busyFrom = mongoSettingToDate(
    global.settings && global.settings.busy_slot_from
  );
  var busyTo = mongoSettingToDate(
    global.settings && global.settings.busy_slot_to
  );
  if (!busyFrom || !busyTo) {
    return null;
  }
  var pickupUtc = pickupToUtcDate(pickupRaw);
  if (!pickupUtc) {
    return null;
  }
  if (pickupUtc.getTime() >= busyFrom.getTime() && pickupUtc.getTime() <= busyTo.getTime()) {
    return "All cars are currently booked during this time. Please select a pickup time after some times.";
  }
  return null;
}
```

Restart Node. 12 AM, 12:17 AM, 3:50 AM, and 4:00 AM on that date must all show the message. 4:01 AM must book.
