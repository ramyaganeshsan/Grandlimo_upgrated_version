var apimodel = require("../../models/passapimodel");
var common = require("../../lib/common");
var favicon = require("../../config/favicon.json");
var config = require("../../config/common_config.json");
var q = require("q");
var appRoot = require("app-root-path");
var validator = require("validator");
var fs = require("fs");
var validate = require("validate.js");
var dateFormat = require("dateformat");
var time = require("time");
//var i18n = require('i18n');
var t = require("../../config/table_config.json");
var uniqid = require("uniqid");
var sort = require("sort-array-objects");

exports.passenger_trips_list = function (q, req) {
  var deferred = q.defer();

  let inputParams = req.body;

  let message = {
    message: "",
    status: 0,
  };

  //var hostname = req.headers.host;
  var hostname = global.settings.base_url;
  var appRoot = global.settings.docroot;

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
    var userid = inputParams.passenger_id;
    var start = inputParams.start;
    var limit = inputParams.limit;

    apimodel.passenger_profile_by_id(q, userid).then(function (checkresults) {
      if (checkresults.length > 0) {
        var details = {};
        apimodel
          .passenger_trips_completed(q, userid)
          .then(function (completed_tripresults) {
            apimodel
              .passenger_trips_cancelled(q, userid)
              .then(function (cancelled_tripresults) {
                apimodel
                  .passenger_trips_missed(q, userid)
                  .then(function (missed_tripresults) {
                    apimodel
                      .passenger_trips_rejected(q, userid)
                      .then(function (rejected_tripresults) {
                        apimodel
                          .passenger_trips_upcoming(q, userid)
                          .then(function (upcoming_tripresults) {
                            try {
                              //console.log('completed.....',completed_tripresults.length);
                              //console.log('cancelled.....',cancelled_tripresults.length);
                              //console.log('missed....',missed_tripresults.length);
                              //console.log('rejected....',rejected_tripresults.length);
                              //console.log('Upcoming....',upcoming_tripresults.length);

                              var tripresults = [];
                              var completed_trips = [];
                              if (completed_tripresults.length > 0) {
                                completed_trips = completed_tripresults;
                              }
                              var cancelled_trips = [];
                              if (cancelled_tripresults.length > 0) {
                                cancelled_trips = cancelled_tripresults;
                              }
                              var missed_trips = [];
                              if (missed_tripresults.length > 0) {
                                missed_trips = missed_tripresults;
                              }
                              var rejected_trips = [];
                              if (rejected_tripresults.length > 0) {
                                rejected_trips = rejected_tripresults;
                              }

                              var upcomingTrips = [];
                              if (upcoming_tripresults.length > 0) {
                                upcomingTrips = upcoming_tripresults;
                              }

                              tripresults = tripresults
                                .concat(completed_trips)
                                .concat(cancelled_trips)
                                .concat(missed_trips)
                                .concat(rejected_trips)
                                .concat(upcomingTrips);

                              var props = ["_id"];
                              tripresults = sort.default(tripresults, props, 1);
                              //console.log('trip results..',tripresults.length);

                              tripresults = tripresults.splice(
                                start * limit,
                                limit
                              );
                              //console.log('trip results..',tripresults.length);
                            } catch (err) {
                              console.log(err);
                            }

                            if (tripresults.length > 0) {
                              var i = 0;
                              tripresults.forEach(function (element) {
                                //console.log("6666666666666",tripresults);
                                try {
                                  tripresults[i].profile_image =
                                    get_passenger_profile(
                                      appRoot,
                                      element.passenger_profile_image,
                                      hostname
                                    );
                                  tripresults[i].driver_image =
                                    get_driver_profile(
                                      appRoot,
                                      element.driver_image,
                                      hostname
                                    );

                                  var payment_type = element.payment_type;
                                  var wallet_amount_used =
                                    element.wallet_used_amount;
                                  var pending_amt = element.pending_amt;
                                  var advance_payment = element.advance_payment;
                                  var driver_edit_status =
                                    element.driver_edit_status;
                                  var add_amt = element.add_amt;
                                  var driver_firstname = element.drivername;
                                  var driver_lastname = element.driver_lastname;
                                  var driver_reply = element.driver_reply;
                                  var travel_status = element.travel_status;

                                  tripresults[i].drivername =
                                    driver_firstname + " " + driver_lastname;
                                  tripresults[i].payment_type =
                                    get_payment_message(
                                      req,
                                      payment_type,
                                      wallet_amount_used,
                                      pending_amt,
                                      advance_payment,
                                      driver_edit_status,
                                      add_amt
                                    );
                                  tripresults[i].travel_msg = get_travel_msg(
                                    req,
                                    travel_status,
                                    driver_reply
                                  );

                                  if (element.distance != "") {
                                    var distance = parseFloat(element.distance);
                                    tripresults[i].distance =
                                      distance.toFixed(2);
                                  } else {
                                    tripresults[i].distance = 0;
                                  }

                                  //console.log('pickup time',element.actual_pickup_time);
                                  //console.log('trip id',element._id);

                                  if (element.pickup_time != "") {
                                    var pickup_time = new Date(
                                      element.pickup_time
                                    );
                                    tripresults[i].pickup_time =
                                      common.convert_timezone(
                                        element.pickup_time
                                      );
                                    tripresults[i].pickuptime =
                                      common.convert_timezone(
                                        element.pickup_time
                                      );
                                  } else {
                                    tripresults[i].pickup_time = "";
                                    tripresults[i].pickuptime = "";
                                  }

                                  if (element.actual_pickup_time != "") {
                                    var actual_pickup_time = new Date(
                                      element.actual_pickup_time
                                    );
                                    tripresults[i].actual_pickup_time =
                                      common.convert_timezone(
                                        element.actual_pickup_time
                                      );
                                  } else {
                                    tripresults[i].actual_pickup_time = "";
                                  }

                                  if (element.drop_time != "") {
                                    var drop_time = new Date(element.drop_time);
                                    tripresults[i].drop_time =
                                      common.convert_timezone(
                                        element.drop_time
                                      );
                                    tripresults[i].droptime =
                                      common.convert_timezone(
                                        element.drop_time
                                      );
                                  } else {
                                    tripresults[i].drop_time = "";
                                    tripresults[i].droptime = "";
                                  }

                                  i++;
                                } catch (err) {
                                  console.log(err);
                                }
                              });

                              message.message = req.__("success");
                              message.detail = tripresults;
                              message.status = 1;
                              deferred.resolve(message);
                              deferred.makeNodeResolver();
                              message = null;
                            } else {
                              message.detail = [];
                              message.message = req.__("no_data");
                              message.status = 0;
                              deferred.resolve(message);
                              deferred.makeNodeResolver();
                              message = null;
                            }
                          });
                      });
                  });
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
  var appRoot = global.settings.docroot;

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
      apimodel
        .get_completed_trip_detail(q, trip_id)
        .then(function (completedtripdetailresults) {
          apimodel.trip_pay_details(q, trip_id).then(function (trippayresults) {
            apimodel.get_ratings_info(q).then(function (ratingsinforesults) {
              //console.log('trippayresults',trippayresults);

              if (completedtripdetailresults.length > 0) {
                tripdetailresults = completedtripdetailresults;
              }

              var trip_pay_details = {};
              if (trippayresults.length > 0) {
                trip_pay_details = trippayresults[0];
              }
              var ratingsinfo = [];
              if (ratingsinforesults.length > 0) {
                ratingsinfo = ratingsinforesults;
              }

              if (tripdetailresults.length > 0) {
                try {
                  var i = 0;
                  tripdetailresults.forEach(function (element) {
                    try {
                      var payment_type = element.payment_type;
                      var wallet_amount_used = element.wallet_used_amount;
                      var pending_amt = element.pending_amt;
                      var advance_payment = element.advance_payment;
                      var driver_edit_status = element.driver_edit_status;
                      var driver_name =
                        element.driver_name + " " + element.driver_lastname;
                      var add_amt = element.add_amt;
                      var travel_status = element.travel_status;
                      var waiting_secs = element.waiting_hours * 3600;
                      var trip_secs = element.trip_minutes * 60;

                      console.log("trip secs", trip_secs);
                      console.log("trip paydet:", trip_pay_details);

                      tripdetailresults[i].trip_fare = element.fare;
                      tripdetailresults[i].paid_amt = element.fare;
                      tripdetailresults[i].static_map = check_map_image(
                        appRoot,
                        trip_id,
                        hostname
                      );
                      tripdetailresults[i].trip_duration_mins =
                        convsecstoformat(trip_secs);
                      tripdetailresults[i].used_wallet_amount =
                        element.wallet_used_amount;

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

                      if (element.pickup_time != "") {
                        var pickup_time = new Date(element.pickup_time);
                        tripdetailresults[i].pickuptime = tripdetailresults[
                          i
                        ].pickup_time = common.convert_timezone(
                          element.pickup_time
                        );
                      } else {
                        tripdetailresults[i].pickup_time = "";
                        tripdetailresults[i].pickuptime = "";
                      }

                      if (element.actual_pickup_time != "") {
                        var actual_pickup_time = new Date(
                          element.actual_pickup_time
                        );
                        tripdetailresults[i].actual_pickup_time =
                          common.convert_timezone(element.actual_pickup_time);
                      } else {
                        tripdetailresults[i].actual_pickup_time = "";
                      }

                      if (element.drop_time != "") {
                        var drop_time = new Date(element.drop_time);
                        tripdetailresults[i].drop_time =
                          common.convert_timezone(element.drop_time);
                        tripdetailresults[i].droptime = common.convert_timezone(
                          element.drop_time
                        );
                      } else {
                        tripdetailresults[i].drop_time = "";
                        tripdetailresults[i].droptime = "";
                      }

                      if (element.fare_calculation_type == 0) {
                        tripdetailresults[i].fare_calculation_type =
                          global.settings.fare_calculation_type;
                      }

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

                      tripdetailresults[i].payment_type = get_payment_message(
                        req,
                        payment_type,
                        wallet_amount_used,
                        pending_amt,
                        advance_payment,
                        driver_edit_status,
                        add_amt
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

                      if (element.distance != "") {
                        var distance = parseFloat(element.distance);
                        tripdetailresults[i].distance = distance.toFixed(2);
                      } else {
                        tripdetailresults[i].distance = 0;
                      }

                      tripdetailresults[i].passenger_image =
                        get_passenger_profile(
                          appRoot,
                          element.passenger_profile_image,
                          hostname
                        );
                      tripdetailresults[i].driver_image = get_driver_profile(
                        appRoot,
                        element.driver_image,
                        hostname
                      );
                      tripdetailresults[i].model_image_new = get_model_image(
                        appRoot,
                        element.model_image_new,
                        hostname
                      );
                      trip_pay_details.driver_image = get_driver_profile(
                        appRoot,
                        element.driver_image,
                        hostname
                      );
                      trip_pay_details.driver_name = driver_name;

                      if (travel_status == 1 || travel_status == 5) {
                        tripdetailresults[i].trip_pay_details =
                          trip_pay_details;
                        tripdetailresults[i].trip_pay_details.ratings_info =
                          ratingsinfo;
                      } else {
                        tripdetailresults[i].trip_pay_details = {};
                      }
                    } catch (err) {
                      console.log(err);
                    }

                    i++;
                  });
                  details = tripdetailresults[0];
                  message.message = req.__("success");
                  message.detail = details;
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
          });
        });
    });
  }

  return deferred.promise;
};

function validateBookingList(q, input) {
  var constraints = {
    passenger_id: {
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

function convsecstoformat(secs) {
  if (secs >= 0) {
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
  } else {
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
function get_travel_msg(req, travel_status, driver_reply) {
  var travel_msg = "";
  try {
    switch (parseInt(travel_status)) {
      case 1:
        travel_msg = req.__("fare_update_label");
        break;

      case 2:
        travel_msg = req.__("inprogress_label");
        break;

      case 3:
        travel_msg = req.__("arrived_label");
        break;

      case 5:
        travel_msg = req.__("completed_label");
        break;

      case 9:
        if (driver_reply == "A") travel_msg = req.__("trip_confirmed_label");
        break;

      default:
        travel_msg = req.__("yet_assigned_label");
        break;
    }
  } catch (err) {
    console.log(err);
  }

  return travel_msg;
}

function get_payment_message(
  req,
  payment_type,
  wallet_amount_used,
  pending_amt,
  advance_payment,
  driver_edit_status,
  add_amt = ""
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
  return payment_type_msg;
}

function get_passenger_profile(appRoot, profile, hostname) {
  try {
    if (
      fs.existsSync(appRoot + "/" + "public/uploads/passenger/" + profile) &&
      profile != ""
    ) {
      return hostname + "/" + "public/uploads/passenger/" + profile;
    } else {
      return hostname + "/" + config.NO_IMAGE;
    }
  } catch (ex) {
    console.log("error", ex);
  }
}

function get_driver_profile(appRoot, profile, hostname) {
  try {
    if (
      fs.existsSync(appRoot + "/" + "public/uploads/driver_image/" + profile) &&
      profile != ""
    ) {
      return hostname + "/" + "public/uploads/driver_image/" + profile;
    } else {
      return hostname + "/" + config.NO_IMAGE;
    }
  } catch (ex) {
    console.log("error", ex);
  }
}

function get_model_image(appRoot, profile, hostname) {
  try {
    if (
      fs.existsSync(appRoot + "/" + "public/uploads/model_image/" + profile) &&
      profile != ""
    ) {
      return hostname + "/" + "public/uploads/model_image/" + profile;
    } else {
      return hostname + "/" + config.NO_IMAGE;
    }
  } catch (ex) {
    console.log("error", ex);
  }
}

function check_map_image(appRoot, trip_id, hostname) {
  try {
    if (
      fs.existsSync(
        appRoot + "/" + "public/uploads/static_maps/" + trip_id + ".png"
      ) &&
      trip_id != ""
    ) {
      return hostname + "/" + "public/uploads/static_maps/" + trip_id + ".png";
    } else {
      return hostname + "/" + config.NO_IMAGE;
    }
  } catch (ex) {
    console.log("error", ex);
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
