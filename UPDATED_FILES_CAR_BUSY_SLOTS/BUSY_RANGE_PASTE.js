/* PASTE into grandlimoV5/lib_v1/passenger/search_drivers.js
   Function: exports.savebooking
   WHERE: after pickupDate / pickup_time console.error lines,
   BEFORE book_later / past-time checks.

   REPLACE any older busy-slot block that did:
     var pickupDate = new Date(pickupTime);
     pickupDate.getTime() >= busySlotFrom.getTime()
   That treats pickup as UTC, so 12 AM-4 AM Kuwait only blocked ~midnight.

   Also paste the three helper functions at the BOTTOM of the same file.
   Same paste in grandlimoV5/lib/passenger/search_drivers.js if that file is live.
   Restart Node after siteinfo / this paste.
*/

    var busySlotMessage = busySlotRejectMessage(pickupTime || pickup_time);
    if (busySlotMessage) {
      message.message = busySlotMessage;
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      return deferred.promise;
    }
