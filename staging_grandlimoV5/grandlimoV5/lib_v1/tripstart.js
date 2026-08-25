var apimodel = require("../models/apimodel_v1");
var favicon = require("../config/favicon.json");
var config = require("../config/common_config.json");
var q = require("q");
var appRoot = require("app-root-path");
var validator = require("validator");
var fs = require("fs");
var validate = require("validate.js");
var dateFormat = require("dateformat");
var time = require("time");
//var passenger_i18n = require('i18n');
var t = require("../config/table_config.json");
var common = require("../lib_v1/common.js");
var uniqid = require("uniqid");

// passenger_i18n.configure({
// 	locales: ['en', 'ar'],

// 	directory: __dirname + '/../locales',
// 	 defaultLocale: 'en',
// 	updateFiles: false,
// 	  autoReload: true,
// 	});

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
                        .send_sms(q, passenger_phone, 9, replace_array)
                        .then(function (checkresults) {});

                      try {
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
                        common.sendPush(
                          passenger_id,
                          req.app.locals.passenger_i18n.__(
                            "driver_arriver_pass"
                          )
                        );
                      } catch (err) {
                        //console.log(err);
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
        ////console.log('------in start trip');

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
          // var now = new time.Date();
          // now.setTimezone(global.settings.timezone);
          // var pickup_time=new Date(now.toLocaleDateString());

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
                          message: "journey_started",
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
                        // 	//console.log("Socket missing...");
                        // }
                      } catch (err) {
                        //console.log(err);
                      }

                      try {
                        common.emitPassenger(passengers_id, socket_msg);
                        common.emitDispatcher(req.io);
                        common.sendPush(
                          passengers_id,
                          req.app.locals.passenger_i18n.__("journey_started")
                        );
                      } catch (err) {
                        console.log(err);
                      }

                      ////console.log('------in start trip 007',socket_msg);

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
  var now = new time.Date();
  now.setTimezone(timezone);
  return dateFormat(new Date(now.toLocaleDateString()), "yyyy-mm-dd");
}

function getStartingDateAndEndingDate(timezone) {
  var now = new time.Date();
  now.setTimezone(timezone);
  start_date = dateFormat(
    new Date(now.toLocaleDateString()),
    "yyyy-mm-dd 00:00:00"
  );
  ending_date = dateFormat(
    new Date(now.toLocaleDateString()),
    "yyyy-mm-dd 23:59:59"
  );

  var start_date = new time.Date(start_date, timezone);
  var ending_date = new time.Date(ending_date, timezone);
  return [
    new Date(start_date.toLocaleString()),
    new Date(ending_date.toLocaleString()),
  ];
}
