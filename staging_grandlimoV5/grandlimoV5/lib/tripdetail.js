var apimodel = require("../models/apimodel");
var favicon = require("../config/favicon.json");
var config = require("../config/common_config.json");
var common = require("../lib/common");
var q = require("q");
var appRoot = require("app-root-path");
var validator = require("validator");
var fs = require("fs");
var validate = require("validate.js");
var dateFormat = require("dateformat");
var time = require("time");
var i18n = require("i18n");
var t = require("../config/table_config.json");
var uniqid = require("uniqid");
var dateformatter = require("date-format-php");

exports.driver_booking_list = function (q, req) {
  var deferred = q.defer();

  let inputParams = req.body;

  let message = {
    message: "",
    status: 0,
  };

  //var hostname = req.headers.host;
  var hostname = global.settings.base_url;

  var validate_error = validateBookingList(q, inputParams);

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
    var userid = inputParams.driver_id;
    //Kumaresh
    var start = inputParams.start;
    var limit = inputParams.limit;
    //Kumaresh

    apimodel.get_driver_status(q, userid).then(function (checkresults) {
      if (checkresults.length > 0) {
        var details = {};
        apimodel
          .driver_pending_trips(q, userid)
          .then(function (pendingtripresults) {
            apimodel
              .driver_past_trips(q, userid, start, limit)
              .then(function (pasttripresults) {
                //Kumaresh

                //console.log('pendingtripresults',pendingtripresults);
                try {
                  if (pendingtripresults.length > 0) {
                    var i = 0;
                    pendingtripresults.forEach(function (element) {
                      //var pickup_time = new Date(element.pickup_time);
                      pendingtripresults[i].profile_image =
                        get_passenger_profile(
                          element.passenger_profile_image,
                          hostname
                        );
                      pendingtripresults[i].pickup_time =
                        common.convert_timezone(element.pickup_time);

                      i++;
                    });
                    message.pending_trips = pendingtripresults;
                  } else {
                    message.pending_trips = [];
                  }

                  if (pasttripresults.length > 0) {
                    var i = 0;
                    pasttripresults.forEach(function (element) {
                      var payment_type = element.payment_type;
                      var wallet_amount_used = element.wallet_used_amount;
                      var pending_amt = element.pending_amt;
                      var advance_payment = element.advance_payment;
                      var driver_edit_status = element.driver_edit_status;
                      var add_amt = element.add_amt;

                      pasttripresults[i].payment_type = get_payment_message(
                        payment_type,
                        wallet_amount_used,
                        pending_amt,
                        advance_payment,
                        driver_edit_status,
                        add_amt,
                        req
                      );

                      //var pickup_date = new Date(element.pickup_time);

                      if (element.pickup_time != "")
                        pasttripresults[i].pickup_time =
                          common.convert_timezone(element.pickup_time);
                      else
                        pasttripresults[i].pickup_time =
                          common.convert_timezone(element.pickup_time);

                      if (element.distance != "")
                        pasttripresults[i].distance =
                          element.distance.toFixed(2);
                      else pasttripresults[i].distance = 0;

                      if (element.trip_duration != "")
                        pasttripresults[i].total_trip_duration =
                          convsecstoformat(element.trip_duration);
                      else
                        pasttripresults[i].total_trip_duration =
                          convsecstoformat(0);

                      console.log(
                        "trip_duration_minutes",
                        element._id + "-" + element.trip_minutes
                      );
                      if (
                        element.trip_minutes &&
                        element.trip_minutes > 0 &&
                        element.trip_minutes != ""
                      )
                        pasttripresults[i].trip_duration = convsecstoformat(
                          element.trip_minutes * 60
                        );
                      else
                        pasttripresults[i].trip_duration = convsecstoformat(0);

                      if (element.waiting_hour != "")
                        pasttripresults[i].waiting_hour = element.waiting_hour;
                      else
                        pasttripresults[i].waiting_hour = convsecstoformat(0);

                      pasttripresults[i].profile_image = get_passenger_profile(
                        element.passenger_profile_image,
                        hostname
                      );

                      i++;
                    });
                    message.past_trips = pasttripresults;
                  } else {
                    message.past_trips = [];
                  }

                  message.message = req.__("success");
                  //message.details = details;
                  message.status = 1;
                  deferred.resolve(message);
                  deferred.makeNodeResolver();
                  message = null;
                } catch (err) {
                  console.log(err);
                }
              });
          });
      } else {
        message.message = req.__("invalid_user_driver");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        message = null;
      }
    });
  }

  return deferred.promise;
};

exports.get_trip_detail = function (q, req) {
  var deferred = q.defer();

  let inputParams = req.body;

  let message = {
    message: "",
    status: 0,
  };

  //var hostname = req.headers.host;
  var hostname = global.settings.base_url;

  var validate_error = validateTripDetail(q, inputParams);

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
    var details = {};
    apimodel.get_trip_detail(q, trip_id).then(function (tripdetailresults) {
      if (tripdetailresults.length > 0) {
        try {
          var i = 0;
          tripdetailresults.forEach(function (element) {
            try {
              /* Sasidharan aug 13 2022 */
              tripdetailresults[i].passenger_wallet_amount = parseFloat(
                element.passenger_wallet_amount
              ).toFixed(2);

              var payment_type = element.payment_type;
              var wallet_amount_used = element.wallet_used_amount;
              var pending_amt = element.pending_amt;
              var advance_payment = element.advance_payment;
              var driver_edit_status = element.driver_edit_status;
              var add_amt = element.add_amt;
              // var pickup_time =convert_timezone(element.pickup_time);
              // var actual_pickup_time =convert_timezone(element.actual_pickup_time);
              // var drop_time =convert_timezone(element.drop_time);
              // var arrived_time =convert_timezone(element.arrived_time);

              tripdetailresults[i].payment_type = get_payment_message(
                payment_type,
                wallet_amount_used,
                pending_amt,
                advance_payment,
                driver_edit_status,
                add_amt,
                req
              );

              // Ramya 24_nov_2023
              var conversation = common.conversation_details(
                element.conversation
              );
              var door_assistance = common.door_assistance_details(
                element.door_assistance
              );

              tripdetailresults[i].door_assistance = door_assistance;
              tripdetailresults[i].conversation = conversation;

              // console.log('pickup time..............',actual_pickup_time);
              //console.log('drop time..............',drop_time);
              //console.log('arrived time..............',arrived_time);

              if (element.distance != "")
                tripdetailresults[i].distance = element.distance.toFixed(2);
              else tripdetailresults[i].distance = 0;

              tripdetailresults[i].passenger_image = get_passenger_profile(
                element.passenger_profile_image,
                hostname
              );
              tripdetailresults[i].driver_image = get_driver_profile(
                element.driver_image,
                hostname
              );

              if (element.fixed_estimate_fare_type) {
                tripdetailresults[i].fixed_estimate_fare_type =
                  element.fixed_estimate_fare_type;
              } else {
                tripdetailresults[i].fixed_estimate_fare_type = 0;
              }

              if (element.fixed_estimate_result) {
                tripdetailresults[i].fixed_estimate_result =
                  element.fixed_estimate_result;
              } else {
                tripdetailresults[i].fixed_estimate_result = {};
              }

              if (element.fare_calculation_type == 0) {
                tripdetailresults[i].fare_calculation_type =
                  global.settings.fare_calculation_type;
              }

              if (element.pickup_time != "" && element.pickup_time) {
                tripdetailresults[i].pickup_time = common.convert_timezone(
                  element.pickup_time
                );
                tripdetailresults[i].pickuptime = common.convert_timezone(
                  element.pickup_time
                );
              } else {
                tripdetailresults[i].pickup_time = "";
                tripdetailresults[i].pickuptime = "";
              }

              if (
                element.actual_pickup_time != "" &&
                element.actual_pickup_time
              )
                tripdetailresults[i].actual_pickup_time =
                  common.convert_timezone(element.actual_pickup_time);
              else tripdetailresults[i].actual_pickup_time = "";

              if (element.drop_time != "" && element.drop_time) {
                tripdetailresults[i].drop_time = common.convert_timezone(
                  element.drop_time
                );
                tripdetailresults[i].droptime = common.convert_timezone(
                  element.drop_time
                );
              } else {
                tripdetailresults[i].drop_time = "";
                tripdetailresults[i].droptime = "";
              }

              if (element.arrived_time != "" && element.arrived_time)
                tripdetailresults[i].arrived_time = common.convert_timezone(
                  element.arrived_time
                );
              else tripdetailresults[i].arrived_time = "";

              // Customization
              //console.log('airport_flight_number',element.airport_flight_number);
              //console.log('sign_plate',element.sign_plate);

              if (
                typeof element.airport_flight_number == "undefined" ||
                element.airport_flight_number == "" ||
                element.airport_flight_number == null
              ) {
                tripdetailresults[i].airport_flight_number = "";
              } else {
                tripdetailresults[i].airport_flight_number =
                  element.airport_flight_number;
              }

              if (
                typeof element.sign_plate == "undefined" ||
                element.sign_plate == ""
              ) {
                tripdetailresults[i].sign_plate = "";
              } else {
                tripdetailresults[i].sign_plate = element.sign_plate;
              }
              //console.log(tripdetailresults);
              var passenger_pending_amt = 0;
              if (
                typeof element.passenger_pending_amt != "undefined" &&
                element.passenger_pending_amt < 0
              ) {
                tripdetailresults[i].passenger_pending_amt = Math.abs(
                  element.passenger_pending_amt
                );
              } else {
                tripdetailresults[i].passenger_pending_amt =
                  passenger_pending_amt;
              }
              // Customization
              if (element.waiting_start_status == 1) {
                var start_waiting_timer = element.start_timer;
                var current_time = new Date();

                if (start_waiting_timer != "")
                  tripdetailresults[i].total_waiting_time =
                    current_time.getTime() -
                    start_waiting_timer.getTime() +
                    element.total_waiting_time;
                else
                  tripdetailresults[i].total_waiting_time =
                    element.total_waiting_time;
              } else {
                tripdetailresults[i].total_waiting_time =
                  element.total_waiting_time;
              }
            } catch (err) {
              console.log(err);
            }

            i++;
          });

          details = tripdetailresults[0];
          message.message = req.__("success");
          message.details = details;
          message.status = 1;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        } catch (err) {
          console.log(err);
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

function validateBookingList(q, input) {
  var constraints = {
    driver_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function validateTripDetail(q, input) {
  var constraints = {
    trip_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function convsecstoformatSec(secs) {
  var sec_num = parseInt(secs, 10); // don't forget the second param
  var hours = Math.floor(sec_num / 3600);
  var minutes = Math.floor((sec_num - hours * 3600) / 60);
  var seconds = sec_num - hours * 3600 - minutes * 60;

  if (hours < 10) {
    hours = "0" + hours;
  }
  if (minutes < 10) {
    minutes = "0" + minutes;
  }
  if (seconds < 10) {
    seconds = "0" + seconds;
  }
  return hours + ":" + minutes + ":" + seconds;
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

// function get_payment_type(payment_type)
// {
// 	var payment_type_msg ='';
// 	switch(payment_type)
// 	{
// 		case 1:
// 		payment_type_msg = req.__('cash_label');
// 		break;
// 		case 2:
// 		payment_type_msg = req.__('card_label');
// 		break;
// 		case 3:
// 		payment_type_msg = req.__('knet_label');
// 		break;
// 		case 6:
// 		payment_type_msg = req.__('wallet_label');
// 		break;
// 		default:
// 		payment_type_msg = req.__('cash_label');
// 		break;
// 	}

// 	return payment_type_msg;
// }

function get_payment_message(
  payment_type,
  wallet_amount_used,
  pending_amt,
  advance_payment,
  driver_edit_status,
  add_amt = "",
  req
) {
  //console.log(payment_type,wallet_amount_used,pending_amt,advance_payment,driver_edit_status,add_amt);
  var payment_type_msg = "";
  switch (parseInt(payment_type)) {
    case 1:
      try {
        payment_type_msg = req.__("cash_label");
        if (wallet_amount_used > 0)
          payment_type_msg = req.__("wallet_cash_label");

        if (pending_amt > 0) {
          if (driver_edit_status == 1) {
            payment_type_msg = req.__("pending_label");
          } else {
            payment_type_msg = req.__("fixed_label");
          }
        }

        if (add_amt != "" && add_amt != 0) {
          payment_type_msg = req.__("fixed_label");
        }
      } catch (err) {
        console.log(err);
      }

      break;

    case 2:
      payment_type_msg = req.__("card_label");
      if (wallet_amount_used > 0)
        payment_type_msg = req.__("wallet_card_label");

      if (pending_amt > 0) {
        if (driver_edit_status == 1) {
          payment_type_msg = req.__("pending_label");
        } else {
          payment_type_msg = req.__("fixed_label");
        }
      }

      if (add_amt != "" && add_amt != 0) {
        payment_type_msg = req.__("fixed_label");
      }

      break;

    case 3:
      payment_type_msg = req.__("knet_label");

      if (wallet_amount_used > 0)
        payment_type_msg = req.__("wallet_knet_label");

      if (pending_amt > 0) {
        if (driver_edit_status == 1) {
          payment_type_msg = req.__("pending_label");
        } else {
          payment_type_msg = req.__("fixed_label");
        }
      }

      if (add_amt != "" && add_amt != 0) {
        payment_type_msg = req.__("fixed_label");
      }

      break;

    case 6:
      payment_type_msg = req.__("wallet_label");
      // if(advance_payment > 0)
      // payment_type_msg = req.__('advance_label');

      if (add_amt != "" && add_amt != 0) {
        payment_type_msg = req.__("fixed_label");
      }
      break;
  }
  //console.log(payment_type_msg);
  return payment_type_msg;
}

function get_passenger_profile(profile, hostname) {
  var appRoot = global.settings.docroot;
  try {
    if (fs.existsSync(appRoot + "public/uploads/passenger/" + profile)) {
      return hostname + "/" + "public/uploads/passenger/" + profile;
    } else {
      return hostname + "/" + config.NO_IMAGE;
    }
  } catch (ex) {
    console.log("error", ex);
  }
}

function get_driver_profile(profile, hostname) {
  var appRoot = global.settings.docroot;

  //console.log(appRoot+'public/uploads/driver_image/'+profile);

  try {
    if (fs.existsSync(appRoot + "public/uploads/driver_image/" + profile)) {
      return hostname + "/" + "public/uploads/driver_image/" + profile;
    } else {
      return hostname + "/" + config.NO_IMAGE;
    }
  } catch (ex) {
    console.log("error", ex);
  }
}

function check_map_image(trip_id, hostname) {
  var appRoot = global.settings.docroot;

  try {
    if (
      fs.existsSync(appRoot + "public/uploads/static_maps/" + trip_id + ".png")
    ) {
      return hostname + "/" + "public/uploads/static_maps/" + trip_id + ".png";
    } else {
      return hostname + "/" + config.NO_IMAGE;
    }
  } catch (ex) {
    console.log("error", ex);
  }
}

function convert_timezone(date) {
  var pickup_time = "";
  if (date != "") {
    pickup_time = date.getTime() + 3 * 60 * 60 * 1000;
    return new Date(pickup_time);
  } else {
    return "";
  }
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
