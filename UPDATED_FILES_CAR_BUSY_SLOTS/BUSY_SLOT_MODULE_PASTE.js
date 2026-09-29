/* LIVE Node v8 paste pack for multiple busy_slot_timing rows.

   1) table_config.json add:
      "MDB_BUSY_SLOT_TIMING": "busy_slot_timing"

   2) models/passapimodel_v1.js — paste after SiteSettings:

exports.BusySlotTimings = function (q) {
  var deferred = q.defer();
  var collectionName = (t && t.MDB_BUSY_SLOT_TIMING) ? t.MDB_BUSY_SLOT_TIMING : "busy_slot_timing";
  var collection = db.get().collection(collectionName);
  collection.find({}).toArray(function (err, docs) {
    if (err) {
      console.log(err);
      deferred.resolve([]);
    } else {
      deferred.resolve(docs || []);
    }
  });
  return deferred.promise;
};

   3) routes/passengerapi_v1.js — after global.settings is set, BEFORE next():

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

      Remove the old standalone next(); that sat right after setting global.settings.

   4) lib_v1/passenger/search_drivers.js — REPLACE busySlotRejectMessage
      (keep pickupToUtcDate / mongoSettingToDate) with getBusySlotWindows +
      formatKuwaitBusySlotMessage + busySlotRejectMessage from
      lib_v1/passenger/search_drivers.js in this branch.

   Restart Node.
*/
