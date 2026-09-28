/* LIVE Node v8 — FIND / REPLACE in:
   grandlimoV5/lib_v1/passenger/search_drivers.js
   (and lib/passenger/search_drivers.js if that file is live)

   FIND the existing function busySlotRejectMessage
   REPLACE it with the function below.

   Error text uses Kuwait time, not UTC. For 12 AM–4 AM Kuwait:
   "All cars are busy in this time slot (31 October, 2026 12:00 AM - 4:00 AM). Please try after 4:00 AM."

   Restart Node.
*/

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
        inRange: inRange,
        kuwaitFrom: moment(busyFrom).tz("Asia/Kuwait").format("D MMMM, YYYY h:mm A"),
        kuwaitTo: moment(busyTo).tz("Asia/Kuwait").format("D MMMM, YYYY h:mm A")
      })
  );
  if (!pickupUtc) {
    return null;
  }
  if (inRange) {
    var fromKwt = moment(busyFrom).tz("Asia/Kuwait");
    var toKwt = moment(busyTo).tz("Asia/Kuwait");
    var fromDate = fromKwt.format("D MMMM, YYYY");
    var toDate = toKwt.format("D MMMM, YYYY");
    var fromTime = fromKwt.format("h:mm A");
    var toTime = toKwt.format("h:mm A");
    var slotLabel =
      fromDate === toDate
        ? fromDate + " " + fromTime + " - " + toTime
        : fromDate + " " + fromTime + " - " + toDate + " " + toTime;
    var tryAfter = fromDate === toDate ? toTime : toDate + " " + toTime;
    return (
      "All cars are busy in this time slot (" +
      slotLabel +
      "). Please try after " +
      tryAfter +
      "."
    );
  }
  return null;
}
