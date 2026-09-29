/* LIVE Node v8 — FIND / REPLACE. Paste all 4 files, then restart Node.

================================================================
FILE 1 — grandlimoV5/config/table_config.json
FIND the last key, ADD a comma, ADD this line before the closing }
================================================================
"MDB_BUSY_SLOT_TIMING": "busy_slot_timing"

================================================================
FILE 2 — grandlimoV5/models/passapimodel_v1.js
ADD this AFTER exports.SiteSettings (callback style, Node 8 — no async/await)
If your live model already uses async/await, use FILE 2b instead.
================================================================ */

exports.BusySlotTimings = function (q) {
  var deferred = q.defer();
  var collectionName = (t && t.MDB_BUSY_SLOT_TIMING) || "busy_slot_timing";
  var collection = db.get().collection(collectionName);
  collection.find({}).toArray(function (err, results) {
    if (err) {
      console.log(err);
      deferred.resolve([]);
      return;
    }
    deferred.resolve(results || []);
  });
  return deferred.promise;
};

/* FILE 2b — only if SiteSettings already uses async/await
exports.BusySlotTimings = async function (q) {
  var deferred = q.defer();
  var collectionName = (t && t.MDB_BUSY_SLOT_TIMING) || "busy_slot_timing";
  try {
    var collection = db.get().collection(collectionName);
    const results = await collection.find({}).toArray();
    deferred.resolve(results || []);
  } catch (err) {
    console.log(err);
    deferred.resolve([]);
  }
  return deferred.promise;
};
*/

/* ==============================================================
FILE 3 — grandlimoV5/routes/passengerapi_v1.js
FIND this after SiteSettings:
            next();
REPLACE with the block below (keep global.settings assignment above it)
============================================================== */

            var loadSlots = apimodel.BusySlotTimings
              ? apimodel.BusySlotTimings(q)
              : q.when([]);
            loadSlots.then(
              function (slots) {
                global.busy_slots = slots || [];
                next();
              },
              function () {
                global.busy_slots = [];
                next();
              }
            );

/* ==============================================================
FILE 4 — grandlimoV5/lib_v1/passenger/search_drivers.js
KEEP the savebooking call:
    var busySlotMessage = busySlotRejectMessage(pickupTime || pickup_time);
KEEP mongoSettingToDate and pickupToUtcDate.
FIND function busySlotRejectMessage
REPLACE it with getBusySlotWindows + formatKuwaitBusySlotMessage + busySlotRejectMessage below.
============================================================== */

function getBusySlotWindows() {
  var windows = [];
  var i;
  var from;
  var to;
  var row;
  if (global.busy_slots && global.busy_slots.length) {
    for (i = 0; i < global.busy_slots.length; i++) {
      row = global.busy_slots[i];
      from = mongoSettingToDate(row && row.busy_slot_from);
      to = mongoSettingToDate(row && row.busy_slot_to);
      if (from && to) {
        windows.push({
          source: "busy_slot_timing",
          id: row._id,
          from: from,
          to: to
        });
      }
    }
  }
  if (!windows.length) {
    from = mongoSettingToDate(
      global.settings && global.settings.busy_slot_from
    );
    to = mongoSettingToDate(global.settings && global.settings.busy_slot_to);
    if (from && to) {
      windows.push({
        source: "siteinfo",
        id: null,
        from: from,
        to: to
      });
    }
  }
  return windows;
}

function formatKuwaitBusySlotMessage(busyFrom, busyTo) {
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

function busySlotRejectMessage(pickupRaw) {
  var windows = getBusySlotWindows();
  if (!windows.length) {
    console.error(
      "BUSY_SLOT_CHECK " +
        JSON.stringify({
          rawPickup: pickupRaw,
          skip: "no_busy_slot",
          slotCount: 0
        })
    );
    return null;
  }
  var pickupUtc = pickupToUtcDate(pickupRaw);
  var pickupMs = pickupUtc ? pickupUtc.getTime() : null;
  var matched = null;
  var slotLogs = [];
  var i;
  var win;
  var busyFromMs;
  var busyToMs;
  var gteFrom;
  var lteTo;
  var inRange;
  for (i = 0; i < windows.length; i++) {
    win = windows[i];
    busyFromMs = win.from.getTime();
    busyToMs = win.to.getTime();
    gteFrom = pickupMs != null && pickupMs >= busyFromMs;
    lteTo = pickupMs != null && pickupMs <= busyToMs;
    inRange = !!(gteFrom && lteTo);
    slotLogs.push({
      source: win.source,
      slotId: win.id,
      slotIndex: i,
      busyFromUtc: win.from.toISOString(),
      busyToUtc: win.to.toISOString(),
      busyFromMs: busyFromMs,
      busyToMs: busyToMs,
      gteFrom: gteFrom,
      lteTo: lteTo,
      inRange: inRange,
      kuwaitFrom: moment(win.from)
        .tz("Asia/Kuwait")
        .format("D MMMM, YYYY h:mm A"),
      kuwaitTo: moment(win.to)
        .tz("Asia/Kuwait")
        .format("D MMMM, YYYY h:mm A")
    });
    if (inRange && (!matched || busyToMs > matched.to.getTime())) {
      matched = win;
    }
  }
  console.error(
    "BUSY_SLOT_CHECK " +
      JSON.stringify({
        rawPickup: pickupRaw,
        pickupType: typeof pickupRaw,
        parsedFormat: pickupToUtcDate.lastFormat || null,
        pickupUtc: pickupUtc ? pickupUtc.toISOString() : null,
        pickupUtcMs: pickupMs,
        slotCount: windows.length,
        inRange: !!matched,
        matchedSource: matched ? matched.source : null,
        matchedId: matched ? matched.id : null,
        slots: slotLogs
      })
  );
  if (!pickupUtc || !matched) {
    return null;
  }
  return formatKuwaitBusySlotMessage(matched.from, matched.to);
}
