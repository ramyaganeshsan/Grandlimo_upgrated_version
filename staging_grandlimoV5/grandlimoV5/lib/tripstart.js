var apimodel = require("../models/apimodel");
var moment = require("moment-timezone");
var favicon = require("../config/favicon.json");
var config = require("../config/common_config.json");
var q = require("q");
var appRoot = require("app-root-path");
var validator = require("validator");
var fs = require("fs");
var validate = require("validate.js");
var dateFormat = require("dateformat");
//var passenger_i18n = require('i18n');
var t = require("../config/table_config.json");
var common = require("../lib/common.js");
var pushNotification = require("../utils/encryption.js");
var apn = require("apn");
const path = require("path");

var uniqid = require("uniqid");

// passenger_i18n.configure({
// 	locales: ['en', 'ar'],

// 	directory: __dirname + '/../locales',
// 	 defaultLocale: 'en',
// 	updateFiles: false,
// 	  autoReload: true,
// 	});

const apnProvider = new apn.Provider({
  token: {
    key: path.join(__dirname, "AuthKey_C6DSLF5LTG.p8"),
    keyId: "C6DSLF5LTG",
    teamId: "FDG4PBGHHM",
  },
  production: true,
});

const helper = async (deviceToken, pushmessage) => {
  console.error("callng helper apn function ");
  let note = new apn.Notification();
  note.topic = "com.grandlimo.passenger";
  note.alert = pushmessage.message;
  note.sound = "default";

  note.payload = {
    trip_id: pushmessage.trip_id || "",
    status: pushmessage.status || "",
  };

  apnProvider.send(note, deviceToken).then((result) => {
    console.log(result);
  });
};

exports.send_push_notification_ios = async (req, res) => {
  console.error("calling node api from php");
  console.error("req.query : ", req.query.deviceToken);
  const deviceToken = req.query.deviceToken;

  let pushmessage = {};
  try {
    pushmessage = JSON.parse(req.query.pushmessage || "{}");
  } catch (e) {
    console.error("Invalid pushmessage JSON");
  }

  console.error("values : ", deviceToken, pushmessage);
  await helper(deviceToken, pushmessage);
  res.json({ success: true });
};

exports.driver_arrived = function (q, req) {
  var deferred = q.defer();

  let inputParams = req.body;

  let message = {
    message: "",
    status: 0,
  };

  var hostname = req.headers.host;

  var validate_error = validateDriverArrived(q, inputParams);

  if (validate_error != undefined) {
    if (validate_error[0]) {
      message.message = validate_error[0];
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
    } else {
      message.message = req.__("validation_error");
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
    }
  } else {
    var trip_id = inputParams.trip_id;

    apimodel.get_trip_detail(q, trip_id).then(function (detailsresults) {
      if (detailsresults.length > 0) {
        var travel_status = detailsresults[0].travel_status;
        var driver_status = detailsresults[0].driver_status;
        var passenger_id = detailsresults[0].passengers_id;
        var passenger_phone = detailsresults[0].passenger_phone;
        var country_code = detailsresults[0].country_code;
        var device_token = detailsresults[0].device_token;

        var coordinates = detailsresults[0].coordinates;
        var accuracy = detailsresults[0].accuracy;
        var bearing = detailsresults[0].bearing;
        var taxi_no = detailsresults[0].taxi_no;
        var taxi_colour = detailsresults[0].taxi_colour;
        var taxi_manufacturer = detailsresults[0].taxi_manufacturer;
        var driver_id = detailsresults[0].driver_id;
        try {
          var passenger_lang =
            typeof detailsresults[0].passenger_lang !== "undefined"
              ? detailsresults[0].passenger_lang
              : "en";
          req.app.locals.passenger_i18n.setLocale(passenger_lang);
          //console.log("passenger_lang",passenger_lang);
        } catch (err) {
          //console.log(err);
        }

        if (travel_status == 4) {
          message.message = req.__("trip_cancelled_passenger");
          message.status = -1;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        } else if (travel_status != 9 || driver_status == "A") {
          message.message = req.__("passenger_in_journey");
          message.status = -1;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        } else {
          var update_trip_array = {
            travel_status: parseInt(3),
            arrived_time: new Date(),
          };

          var update_shift_array = {
            status: "B",
          };

          var update_request_array = {
            status: parseInt(5),
          };

          apimodel
            .update_trip(q, update_trip_array, trip_id)
            .then(function (checkresults) {
              apimodel
                .update_driver_shift(q, update_shift_array, driver_id)
                .then(function (checkresults) {
                  apimodel
                    .update_request_details(q, update_request_array, trip_id)
                    .then(function (checkresults) {
                      var replace_array = {
                        taxi_colour: taxi_colour,
                        taxi_manufacturer: taxi_manufacturer,
                        taxi_no: taxi_no,
                        sitename: global.settings.app_name,
                      };
                      common
                        .send_sms(
                          q,
                          passenger_phone,
                          9,
                          replace_array,
                          country_code
                        )
                        .then(function (checkresults) {});

                      try {
                        // var msg_txt = "driver_arriver_pass";
                        var msg_txt = "driver_arriver_pass";
                        var trip_details = [];
                        trip_details["trip_id"] = trip_id;

                        var socket_msg = {
                          message: msg_txt,
                          taxi_colour,
                          taxi_manufacturer,
                          taxi_no,
                          trip_id,
                          detail: trip_details,
                          driver_latitute: coordinates[1],
                          driver_longitude: coordinates[0],
                          bearing: bearing,
                          accuracy: accuracy,
                          taxi_min_speed: 0,
                          display: 1,
                          status: 2,
                        };

                        var socket_pass_id = "P-" + passenger_id;
                        //console.log("000000000000000000000",socket_msg);
                        common.emitPassenger(passenger_id, socket_msg);
                        common.emitDispatcher(req.io);
                        // 03 Feb 2020
                        common.sendPush(passenger_id, msg_txt);
                        // 03 Feb 2020
                      } catch (err) {
                        //console.log(err);
                      }

                      try {
                        var deviceToken = device_token;

                        const pushmessage = {
                          message:
                            "Your driver arrived at your location\nوصل سائقك إلى موقعك",
                          trip_id: trip_id,
                          status: 1,
                        };

                        var title = "New Notification";

                        pushNotification
                          .sendAndroidPush(deviceToken, pushmessage, title)
                          .then(function (checkresults) {});

                        pushNotification
                          .sendIosPush(deviceToken, pushmessage)
                          .then(function (checkresults) {});
                      } catch (error) {
                        console.error(
                          "error when send push notification : ",
                          error
                        );
                      }

                      message.message = req.__("driver_arrival_send");
                      message.status = 1;
                      deferred.resolve(message);
                      deferred.makeNodeResolver();
                      message = null;
                    });
                });
            });
        }
      } else {
        message.message = req.__("invalid_trip");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        message = null;
      }
    });
  }

  return deferred.promise;
};

exports.start_trip = function (q, req) {
  var deferred = q.defer();
  console.error("calling trip start");
  let inputParams = req.body;

  let message = {
    message: "",
    status: 0,
  };

  var hostname = req.headers.host;

  var validate_error = validateStartTrip(q, inputParams);

  if (validate_error != undefined) {
    if (validate_error[0]) {
      message.message = validate_error[0];
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
    } else {
      message.message = req.__("validation_error");
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
    }
  } else {
    var trip_id = inputParams.trip_id;
    var driver_id = inputParams.driver_id;
    var latitude = inputParams.latitude;
    var longitude = inputParams.longitude;
    var actual_pickup_location = inputParams.actual_pickup_location;

    apimodel.get_trip_detail(q, trip_id).then(function (detailsresults) {
      if (detailsresults.length > 0) {
        //console.log('------in start trip');

        var travel_status = detailsresults[0].travel_status;
        var driver_status = detailsresults[0].driver_status;
        var drop_latitude = detailsresults[0].drop_latitude;
        var drop_longitude = detailsresults[0].drop_longitude;
        var drop_location = detailsresults[0].drop_location;
        var driver_login_status = detailsresults[0].driver_login_status;
        var coordinates = detailsresults[0].coordinates;
        var accuracy = detailsresults[0].accuracy;
        var bearing = detailsresults[0].bearing;
        var passengers_id = detailsresults[0].passengers_id;
        var arrived_time = detailsresults[0].arrived_time;
        var waiting_free = detailsresults[0].waiting_free;
        var device_token = detailsresults[0].device_token;

        try {
          var passenger_lang =
            typeof detailsresults[0].passenger_lang !== "undefined"
              ? detailsresults[0].passenger_lang
              : "en";
          req.app.locals.passenger_i18n.setLocale(passenger_lang);
        } catch (err) {
          //console.log(err);
        }

        if (travel_status == 4) {
          message.message = req.__("trip_cancelled_passenger");
          message.status = -1;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        } else if (travel_status == 2 || driver_status == "A") {
          message.message = req.__("passenger_in_journey");
          message.status = -1;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        } else if (driver_login_status == "N") {
          message.message = req.__("driver_not_login");
          message.status = -1;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        } else {
          // var now = moment();
          // now.tz(global.settings.timezone);
          // var pickup_time=new Date(now.format("M/D/YYYY"));

          var arrived_waiting_time = 0;
          var current_time = new Date();

          //console.log('current time',current_time);
          //console.log('arrived',arrived_time);

          // client ask to arrieved waiting time no need
          /*	if(current_time != '' && arrived_time != '')
					{ 
					waiting_minutes = current_time.getTime()-arrived_time.getTime();
					waiting_free = waiting_free * 1000 * 60;
					
					if(waiting_minutes>waiting_free){
					arrived_waiting_time = (waiting_minutes-waiting_free);
					}else{
					arrived_waiting_time = 0;
					}						
					} */

          var update_trip_array = {
            travel_status: parseInt(2),
            actual_pickup_time: new Date(),
            duration_update_time: new Date(),
            current_location: actual_pickup_location,
            pickup_latitude: latitude,
            pickup_longitude: longitude,
            total_waiting_time: arrived_waiting_time,
          };

          var update_shift_array = {
            status: "A",
          };

          var update_request_array = {
            status: parseInt(6),
          };

          apimodel
            .update_trip(q, update_trip_array, trip_id)
            .then(function (checkresults) {
              apimodel
                .update_driver_shift(q, update_shift_array, driver_id)
                .then(function (checkresults) {
                  apimodel
                    .update_request_details(q, update_request_array, trip_id)
                    .then(function (checkresults) {
                      try {
                        var trip_details = [];
                        trip_details["trip_id"] = trip_id;

                        var socket_msg = {
                          message:
                            // req.app.locals.passenger_i18n.__("journey_started"),
                            "journey_started",

                          detail: trip_details,
                          driver_latitute: coordinates[1],
                          driver_longitude: coordinates[0],
                          total_waiting_time: arrived_waiting_time,
                          waiting_start_status: 2,
                          bearing: bearing,
                          accuracy: accuracy,
                          runningtime: "00:00:00",
                          taxi_min_speed: 0,
                          display: 1,
                          status: 3,
                        };

                        var socket_pass_id = "P-" + passengers_id;
                        //if(typeof global.socketobj[socket_pass_id] !=='undefined'){
                        //global.socketobj[socket_pass_id].emit('update_trip_status',socket_msg);

                        // } else{
                        // 	console.log("Socket missing...");
                        // }
                      } catch (err) {
                        //console.log(err);
                      }

                      try {
                        common.emitPassenger(passengers_id, socket_msg);
                        common.emitDispatcher(req.io);
                        // common.sendPush(
                        //   passengers_id,
                        //   req.app.locals.passenger_i18n.__("journey_started")
                        // );
                      } catch (err) {
                        //console.log(err,'sockettttt');
                      }

                      try {
                        var deviceToken = device_token;

                        const pushmessage = {
                          message:
                            "Heading to the destination\nفي طريقنا إلى وجهتك",
                          trip_id: trip_id,
                          status: 1,
                        };

                        var title = "New Notification";

                        pushNotification
                          .sendAndroidPush(deviceToken, pushmessage, title)
                          .then(function (checkresults) {});

                        pushNotification
                          .sendIosPush(deviceToken, pushmessage)
                          .then(function (checkresults) {});
                      } catch (error) {
                        console.error(
                          "error when send push notification : ",
                          error
                        );
                      }

                      //console.log('------in start trip 007',socket_msg);

                      var trip_details = {
                        pickup_latitude: latitude,
                        pickup_longitude: longitude,
                        pickup_location: actual_pickup_location,
                        drop_latitude: drop_latitude,
                        drop_longitude: drop_longitude,
                        drop_location: drop_location,
                        total_waiting_time: arrived_waiting_time,
                        start_waiting_time: 0,
                      };
                      message.message = req.__("journey_started");
                      message.detail = trip_details;
                      message.status = 1;
                      deferred.resolve(message);
                      deferred.makeNodeResolver();
                      message = null;
                    });
                });
            });
        }
      } else {
        message.message = req.__("invalid_trip");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        message = null;
      }
    });
  }

  return deferred.promise;
};

function validateDriverArrived(q, input) {
  var constraints = {
    trip_id: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function validateStartTrip(q, input) {
  var constraints = {
    trip_id: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
    latitude: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
    longitude: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
    actual_pickup_location: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function getCurrentDate(timezone, date_format) {
  return moment.tz(timezone || "UTC").format("YYYY-MM-DD");
}

function getStartingDateAndEndingDate(timezone) {
  var now = moment();
  now.tz(timezone);
  start_date = dateFormat(
    new Date(now.format("M/D/YYYY")),
    "yyyy-mm-dd 00:00:00"
  );
  ending_date = dateFormat(
    new Date(now.format("M/D/YYYY")),
    "yyyy-mm-dd 23:59:59"
  );

  var start_date = moment.tz(start_date, timezone);
  var ending_date = moment.tz(ending_date, timezone);
  return [
    new Date(start_date.format("M/D/YYYY, h:mm:ss A")),
    new Date(ending_date.format("M/D/YYYY, h:mm:ss A")),
  ];
}
