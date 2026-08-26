var apimodel = require("../models/apimodel_v1");
var moment = require("moment-timezone");
var q = require("q");
var haversine = require("haversine");
var validate = require("validate.js");
var i18n = require("i18n");
var config = require("../config/common_config.json");
var dateFormat = require("dateformat");
var dateformatter = require("date-format-php");
var common = require("../lib_v1/common");

exports.updateLocation = function (q, data) {
  var deferred = q.defer();
  //console.log("updateLocation");
  apimodel.updateLocation(q, data).then(function (results) {
    var driver_status = data.status;

    //console.log(driver_status);

    if (driver_status == "A" || driver_status == "B") {
      var trip_id = data.trip_id;
      var bearing = data.bearing;
      var accuracy = data.accuracy;
      var locationdata = data.locations;

      if (locationdata != undefined) {
        locations = locationdata.split("|");
        var arrlen = locations.length - 1;
        if (locations[arrlen] != "") {
          var coordinates = locations[arrlen].split(",");
        } else {
          var coordinates = locations[arrlen - 1].split(",");
        }

        apimodel.log_detail(q, trip_id).then(function (tripresults) {
          if (tripresults.length > 0) {
            var passenger_id = tripresults[0].passengers_id;
            var travel_status = tripresults[0].travel_status;
            var actual_pickup_time = tripresults[0].actual_pickup_time;
            var distance = tripresults[0].distance;
            var waiting_start_status = tripresults[0].waiting_start_status;
            var total_waiting_time = tripresults[0].total_waiting_time;
            var start_timer = tripresults[0].start_timer;
            var end_timer = tripresults[0].end_timer;

            var trip_details = [];
            trip_details["trip_id"] = trip_id;
            var socket_msg = {};

            console.log("trip_details", trip_details);

            if (travel_status == "9") {
              socket_msg = {
                // message: i18n.__("request_confirmed_passenger"),
                message: "request_confirmed_passenger",

                detail: trip_details,
                driver_latitute: coordinates[0],
                driver_longitude: coordinates[1],
                bearing: bearing,
                accuracy: accuracy,
                trip_id: trip_id,
                display: 0,
                status: 1,
              };
              //console.log('confirmed',socket_msg);
              var socket_pass_id = "P-" + passenger_id;

              //console.log(socket_pass_id);

              //global.socketobj[socket_pass_id].emit('update_trip_status',socket_msg);
              common.emitPassenger(passenger_id, socket_msg);
            } else if (travel_status == "3") {
              socket_msg = {
                // message: i18n.__("passenger_on_board"),
                message: "passenger_on_board",

                detail: trip_details,
                driver_latitute: coordinates[0],
                driver_longitude: coordinates[1],
                bearing: bearing,
                accuracy: accuracy,
                taxi_min_speed: 0,
                trip_id: trip_id,
                status: 2,
                display: 0,
              };

              var socket_pass_id = "P-" + passenger_id;

              //console.log(socket_pass_id);

              //global.socketobj[socket_pass_id].emit('update_trip_status',socket_msg);
              common.emitPassenger(passenger_id, socket_msg);
            } else if (travel_status == "5") {
              socket_msg = {
                message: i18n.__("trip_completed"),
                detail: trip_details,
                driver_latitute: coordinates[0],
                driver_longitude: coordinates[1],
                bearing: bearing,
                accuracy: accuracy,
                trip_id: trip_id,
                display: 0,
                status: 4,
              };
              var socket_pass_id = "P-" + passenger_id;

              //console.log(socket_pass_id);

              //global.socketobj[socket_pass_id].emit('update_trip_status',socket_msg);
              /* Sasidharan May 06 2024 */
              // common.emitPassenger(passenger_id,socket_msg);
            } else if (travel_status == "2") {
              actual_pickup_time = actual_pickup_time.getTime();
              var current_time = new Date().getTime();
              var running_time = convsecstoformat(
                (current_time - actual_pickup_time) / 1000
              );
              //console.log('running_time',current_time);
              //console.log('running_time',actual_pickup_time);
              //console.log('running_time',running_time);

              var actual_pickup_date = new Date(actual_pickup_time);
              //actual_pickup_time = actual_pickup_date.format('d-M-Y H:i:s');

              if (waiting_start_status == 1) {
                var start_waiting_timer = start_timer;
                var current_time = new Date();

                if (start_waiting_timer != "")
                  total_waiting_time =
                    current_time.getTime() -
                    start_waiting_timer.getTime() +
                    total_waiting_time;
              }

              var socket_msg = {
                // message: i18n.__("journey_started"),
                message: "journey_started",

                detail: trip_details,
                driver_latitute: coordinates[0],
                driver_longitude: coordinates[1],
                bearing: bearing,
                accuracy: accuracy,
                distance: distance,
                runningtime: running_time,
                total_waiting_time: total_waiting_time,
                waiting_start_status: waiting_start_status,
                pickup_time: common.convert_timezone_format(
                  actual_pickup_time,
                  "dd-mmm-yyyy HH:mm:ss"
                ),
                taxi_min_speed: 0,
                display: 0,
                status: 3,
              };
              var socket_pass_id = "P-" + passenger_id;

              //global.socketobj[socket_pass_id].emit('update_trip_status',socket_msg);
              common.emitPassenger(passenger_id, socket_msg);
            }
          }
        });
      }
    }

    let message = { message: "Success", status: 1 };

    deferred.resolve(message);
    deferred.makeNodeResolver();
    message = null;
  });

  return deferred.promise;
};

exports.get_driver_data = function (q, data) {
  var deferred = q.defer();

  var details = [];

  var data = removeFirstNChars(data, 2);

  apimodel.driver_profile_details(q, data).then(function (results) {
    if (results.length > 0) {
      details = results;
      deferred.resolve(details);
      deferred.makeNodeResolver();
      message = null;
    } else {
      deferred.resolve(details);
      deferred.makeNodeResolver();
      message = null;
    }
  });

  return deferred.promise;
};

exports.check_trip_request = function (q, data) {
  var deferred = q.defer();

  var message = { status: 0 };

  var now = moment();
  now.tz(config.TIME_ZONE);
  start_date = dateFormat(
    new Date(now.format("M/D/YYYY")),
    "yyyy-mm-dd 00:00:00"
  );

  var driver_id = data.driver_id;
  var trip_id = data.trip_id;
  var driver_status = data.status;

  apimodel
    .check_new_request(q, driver_id, trip_id, driver_status, start_date)
    .then(function (results) {
      if (results.length > 0) {
        var status = results[0].status;

        if (status == 0) {
          var details = {};
          var trip_details = {};
          var notes_driver = "";
          var taxi_min_speed = "";
          var estimated_time = "";
          var notification_minutes = 0;
          var notification_seconds = 0;
          var trip_id = results[0].trip_id;

          apimodel.get_trip_detail(q, trip_id).then(function (tripresults) {
            if (tripresults.length > 0) {
              var updateArray = {
                status: parseInt(1),
              };
              apimodel
                .update_request_details(q, updateArray, trip_id)
                .then(function (updateresults) {
                  try {
                    trip_details = tripresults[0];
                    notes_driver = tripresults[0].notes_driver;
                    taxi_min_speed = tripresults[0].taxi_min_speed;
                    estimated_time = tripresults[0].time_to_reach_passen;

                    var notification_time =
                      global.settings.notification_settings;

                    if (notification_time > 60) {
                      notification_minutes = notification_time / 60;
                      notification_minutes = notification_minutes.toFixed(0);
                      notification_seconds =
                        notification_time - notification_minutes * 60;
                    } else {
                      notification_seconds = notification_time;
                    }

                    details.booking_details = trip_details;
                    details.estimated_time = estimated_time;
                    details.notification_time = notification_time;
                    details.notification_minutes = notification_minutes;
                    details.notification_seconds = notification_seconds;
                    details.notes = notes_driver;
                    details.belowspeed_mins = taxi_min_speed;

                    message.status = 1;
                    message.details = details;

                    //console.log('request',message);

                    deferred.resolve(message);
                    deferred.makeNodeResolver();
                    message = null;
                  } catch (err) {
                    console.log("erree", err);
                  }
                });
            } else {
              message.status = 0;
              deferred.resolve(message);
              deferred.makeNodeResolver();
              message = null;
            }
          });
        } else if (status == 20) {
          message.status = 20;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        } else if (status == 4) {
          message.status = 4;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        } else if (status == 8) {
          message.status = 8;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        } else {
          message.status = 0;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        }
      } else {
        message.status = 0;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        message = null;
      }
    });

  return deferred.promise;
};

exports.saveLocation = function (q, data) {
  var time_start = new Date();
  var deferred = q.defer();
  let message = { message: "", status: 0 };

  var validate_error = validateLocationUpdate(q, data);

  if (validate_error != undefined) {
    if (validate_error[0]) {
      message.message = validate_error[0];
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
    } else {
      message.message = i18n.__("validation_error");
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
    }
  } else {
    // try
    // {
    var location_data = [];
    var location = data.locations;
    var location_array = location.split("|");
    var trip_id = data.trip_id;
    var driver_id = data.driver_id;
    var status = data.status;

    location_array.forEach(function (element) {
      if (element != "") {
        var latlang_split = element.split(",");
        var latlng = [];
        latlng[1] = parseFloat(latlang_split[0]);
        latlng[0] = parseFloat(latlang_split[1]);
        if (data.waiting_type) {
          latlng[2] = parseFloat(data.waiting_type);
        } else {
          latlng[2] = 2;
        }
        location_data.push(latlng);
      }
    });

    //console.log('location_data',location_data);
    apimodel
      .check_driver_location_update(q, trip_id)
      .then(function (checkresults) {
        if (checkresults.length > 0) {
          var prev_location = checkresults[0].loc.coordinates;
          var prev_distance = checkresults[0].distance;
          var total_distance = 0;

          var prev_lat_lng = prev_location[prev_location.length - 1];
          //getting previous last lat lng
          var pickup = prev_lat_lng;

          var options = {
            unit: "km",
            format: "[lon,lat]",
          };

          location_data.map(function (element) {
            if (element != "") {
              var drop = element;

              var distance = haversine(pickup, drop, options);

              //console.log(distance);

              total_distance += distance;

              pickup = drop;
            }
          });

          //console.log('hereeeeeeeeeee',total_distance);

          total_distance = total_distance + prev_distance;

          apimodel
            .update_distance(q, total_distance, trip_id, status)
            .then(function (lastresults) {
              apimodel
                .update_logs_distance(q, total_distance, trip_id, status)
                .then(function (lastresults) {
                  //console.log('location data',location_data);

                  //location_data.map(function(element)
                  //{
                  apimodel
                    .push_driver_location(q, location_data, trip_id)
                    .then(function (lastresults) {
                      //console.log("here06");

                      var time_end = new Date();

                      //console.log('end time.....location update',(time_end - time_start)/1000);

                      message.message = i18n.__("driver_history_updated");
                      message.status = 1;
                      deferred.resolve(message);
                      deferred.makeNodeResolver();
                      message = null;
                    });
                  //});
                });
            });
        } else {
          apimodel.last_driver_location_update(q).then(function (lastresults) {
            if (lastresults.length > 0) {
              try {
                var lastupdate_id = lastresults[0]._id + 1;

                let insertArray = {
                  driver_id: parseInt(driver_id),
                  trip_id: parseInt(trip_id),
                  status: status,
                  distance: 0,
                  _id: parseInt(lastupdate_id),
                  createdate: new Date(),
                  loc: { type: "MultiPoint", coordinates: location_data },
                };

                //console.log('insert array',insertArray);

                apimodel
                  .insert_driver_location_update(q, insertArray)
                  .then(function (checkresults) {
                    message.message = i18n.__("driver_history_updated");
                    message.status = 1;
                    deferred.resolve(message);
                    deferred.makeNodeResolver();
                    message = null;
                  });
              } catch (err) {
                console.log(err);
              }
            }
          });
        }
      });
  }

  return deferred.promise;

  // }
  // catch(err)
  // {
  // 	message.message = i18n.__('driver_history_updated');
  // 	message.status = -1;
  // 	res.type('text/json');
  //    	res.send(message);
  // }
};

function removeFirstNChars(str, n) {
  return str.replace(new RegExp("^.{0," + n + "}(.*)"), "$1");
}

function validateLocationUpdate(q, input) {
  var constraints = {
    status: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    locations: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    driver_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function convsecstoformat(secs) {
  try {
    var hours = secs / 3600;
    hours = hours.toFixed(0);
    if (hours < 0) {
      hours = 0;
    }
    var minutes = (secs - hours * 3600) / 60;
    minutes = minutes.toFixed(0);
    if (minutes < 0) {
      minutes = 0;
    }
    var seconds = secs - (hours * 3600 + minutes * 60);
    seconds = seconds.toFixed(0);
    if (seconds < 0) {
      seconds = 0;
    }
    hours = zeropadding(hours);
    minutes = zeropadding(minutes);
    seconds = zeropadding(seconds);

    if (hours == "00" && hours == "") {
      return minutes + ":" + seconds;
    } else {
      return hours + ":" + minutes + ":" + seconds;
    }
  } catch (err) {
    console.log(err);
    return "00:00:00";
  }
}

function zeropadding(a) {
  h = a < 10 ? "0" + a : a;

  return h;
}
