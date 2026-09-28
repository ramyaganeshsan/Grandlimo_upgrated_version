/* LIVE Node v8 — FIND / REPLACE in:
   grandlimoV5/lib_v1/passenger/search_drivers.js
   (and lib/passenger/search_drivers.js if that file is live)

   FIND the existing function pickupToUtcDate
   REPLACE it with the function below.

   Then FIND the existing function busySlotRejectMessage
   REPLACE it with the function below (keeps BUSY_SLOT_CHECK log).

   Restart Node. Next log for "31 October, 2026 03:03" must be:
     parsedFormat: "D MMMM, YYYY HH:mm"
     pickupUtc: "2026-10-31T00:03:00.000Z"
     inRange: true
*/

function pickupToUtcDate(raw) {
  pickupToUtcDate.lastFormat = null;
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
    pickupToUtcDate.lastFormat = "offset-or-z";
    return isNaN(alreadyUtc.getTime()) ? null : alreadyUtc;
  }
  var formats = [
    "D MMMM, YYYY HH:mm:ss",
    "D MMMM, YYYY HH:mm",
    "DD MMMM, YYYY HH:mm:ss",
    "DD MMMM, YYYY HH:mm",
    "MMMM D, YYYY HH:mm:ss",
    "MMMM D, YYYY HH:mm",
    "YYYY-MM-DD HH:mm:ss",
    "YYYY-MM-DD HH:mm",
    "YYYY-MM-DDTHH:mm:ss",
    "YYYY-MM-DDTHH:mm",
    "YYYY-MM-DD hh:mm:ss A",
    "YYYY-MM-DD hh:mm A",
    "YYYY-MM-DD h:mm:ss A",
    "YYYY-MM-DD h:mm A"
  ];
  var i;
  var parsed;
  for (i = 0; i < formats.length; i++) {
    parsed = moment.tz(s, formats[i], "Asia/Kuwait");
    if (parsed.isValid() && parsed.format(formats[i]) === s) {
      pickupToUtcDate.lastFormat = formats[i];
      return parsed.toDate();
    }
  }
  return null;
}

function busySlotRejectMessage(pickupRaw) {
  var busyFrom = mongoSettingToDate(
    global.settings && global.settings.busy_slot_from
  );
  var busyTo = mongoSettingToDate(
    global.settings && global.settings.busy_slot_to
  );
  if (!busyFrom || !busyTo) {
    console.error(
      "BUSY_SLOT_CHECK " +
        JSON.stringify({
          rawPickup: pickupRaw,
          skip: "no_busy_slot"
        })
    );
    return null;
  }
  var pickupUtc = pickupToUtcDate(pickupRaw);
  var pickupMs = pickupUtc ? pickupUtc.getTime() : null;
  var busyFromMs = busyFrom.getTime();
  var busyToMs = busyTo.getTime();
  var gteFrom = pickupMs != null && pickupMs >= busyFromMs;
  var lteTo = pickupMs != null && pickupMs <= busyToMs;
  var inRange = !!(gteFrom && lteTo);
  console.error(
    "BUSY_SLOT_CHECK " +
      JSON.stringify({
        rawPickup: pickupRaw,
        pickupType: typeof pickupRaw,
        parsedFormat: pickupToUtcDate.lastFormat || null,
        pickupUtc: pickupUtc ? pickupUtc.toISOString() : null,
        pickupUtcMs: pickupMs,
        busyFromRaw: busyFrom.toISOString(),
        busyToRaw: busyTo.toISOString(),
        busyFromUtc: busyFrom.toISOString(),
        busyToUtc: busyTo.toISOString(),
        busyFromMs: busyFromMs,
        busyToMs: busyToMs,
        gteFrom: gteFrom,
        lteTo: lteTo,
        inRange: inRange
      })
  );
  if (!pickupUtc) {
    return null;
  }
  if (inRange) {
    return "All cars are currently booked during this time. Please select a pickup time after some times.";
  }
  return null;
}
