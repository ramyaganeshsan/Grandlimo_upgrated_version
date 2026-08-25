var apimodel = require("../../models/passapimodel_v1");
var favicon = require("../../config/favicon.json");
var config = require("../../config/common_config.json");
var q = require("q");
var appRoot = require("app-root-path");
var validator = require("validator");
var fs = require("fs");
var validate = require("validate.js");
var dateFormat = require("dateformat");
var md5 = require("md5");
var time = require("time");
var i18n = require("i18n");
var t = require("../../config/table_config.json");
var uniqid = require("uniqid");
var randomstring = require("randomstring");
var dateformatter = require("date-format-php");
var urlencode = require("urlencode");

var common = require("../../lib_v1/common.js");

/* Sasidharan july 19 2023 */
var moment = require("moment");

exports.cancel_trip = function (q, req) {
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var hostname = global.settings.base_url;

  var validate_error = ValidateCancelTrip(q, inputParams);

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
    //console.log("cancel00001");
    try {
      var trip_id = inputParams.trip_id;
      var remarks = inputParams.remarks;
      var pay_mod_id = inputParams.pay_mod_id;

      apimodel.get_trip_detail(q, trip_id).then(function (tripresults) {
        //console.log("cancel00002");

        if (tripresults.length > 0) {
          var cancellation_fare = global.settings.cancellation_fare_setting;
          var driver_id = tripresults[0].driver_id;
          var passenger_phone = tripresults[0].passenger_phone;
          var country_code = tripresults[0].country_code;

          var passenger_wallet_amount = tripresults[0].passenger_wallet_amount;
          var travel_status = tripresults[0].travel_status;
          var driver_reply = tripresults[0].driver_reply;
          //console.log("cancel00003");

          if (
            travel_status != 9 &&
            travel_status != 0 &&
            travel_status != 7 &&
            travel_status != 3 &&
            travel_status != 6
          ) {
            message.message = req.__("Not_Cancel");
            message.status = -1;
            deferred.resolve(message);
            deferred.makeNodeResolver();
            message = null;
          } else if (travel_status == 4) {
            message.message = req.__("trip_already_canceled");
            message.status = -1;
            deferred.resolve(message);
            deferred.makeNodeResolver();
            message = null;
          } else if (travel_status == 2) {
            message.message = req.__("passenger_in_journey");
            message.status = -1;
            deferred.resolve(message);
            deferred.makeNodeResolver();
            message = null;
          }
          // 		else if(travel_status == 9 && driver_reply == 'A')
          // 		{
          // 			message.message = req.__('trip_confirmed');
          // message.status = 3;
          // deferred.resolve(message);
          // deferred.makeNodeResolver()
          // message=null;
          // 		}
          else {
            if (cancellation_fare == 0 || travel_status == 0) {
              var update_driver_array = {
                status: "F",
              };
              var update_request_array = {
                status: parseInt(4),
              };

              /* Sasidharan july 19 2023 */
              let currentTime = moment().tz(config.TIMEZONE);

              var update_logs_array = {
                comments: remarks,
                travel_status: parseInt(4),
                /* Sasidharan july 19 2023 */
                cancelation_time: currentTime.toDate(),
                cancelation_time_string: currentTime.format(
                  "YYYY-MM-DD HH:mm:ss"
                ),
              };
              var replace_array = {
                sitename: global.settings.app_name,
              };
              //console.log("cancel00004");

              apimodel
                .update_driver_status(q, driver_id, update_driver_array)
                .then(function (updateresults) {
                  //console.log("cancel00005");
                  apimodel
                    .update_request_details(q, trip_id, update_request_array)
                    .then(function (updateresults) {
                      //console.log("cancel00006");
                      apimodel
                        .update_log_details(q, trip_id, update_logs_array)
                        .then(function (updateresults) {
                          //console.log("cancel00007");
                          common
                            .update_cancel_trip_det(q, trip_id)
                            .then(function (updateresults) {
                              //console.log("cancel00008");
                              common
                                .send_sms(
                                  q,
                                  passenger_phone,
                                  10,
                                  replace_array,
                                  country_code
                                )
                                .then(function (checkresults) {
                                  //console.log("cancel00009");

                                  try {
                                    var trip_details = [];
                                    trip_details["trip_id"] = trip_id;

                                    var socket_msg = {
                                      message: i18n.__(
                                        "passenger_trip_cancelled"
                                      ),
                                      details: trip_details,
                                      status: 7,
                                    };
                                    common.emitDriver(driver_id, socket_msg);
                                    common.emitDispatcher(req.io);
                                  } catch (err) {
                                    //console.log(err);
                                  }

                                  message.message = req.__(
                                    "trip_cancelled_passenger"
                                  );
                                  message.cancellation_from =
                                    req.__("free_label");
                                  message.cancellation_amount = 0;
                                  message.status = 1;
                                  deferred.resolve(message);
                                  deferred.makeNodeResolver();
                                  message = null;
                                });
                            });
                        });
                    });
                });
            } else {
              apimodel
                .get_cancellation_fare(q, trip_id)
                .then(function (fareresults) {
                  //console.log("cancel00000",fareresults.length);
                  if (fareresults.length > 0) {
                    //console.log("cancel00010");

                    var cancellation_amount = fareresults[0].cancellation_fare;

                    if (
                      pay_mod_id == 3 &&
                      passenger_wallet_amount > cancellation_amount
                    ) {
                      //console.log("cancel00011");

                      var update_driver_array = {
                        status: "F",
                      };
                      var update_request_array = {
                        status: parseInt(4),
                      };
                      var update_logs_array = {
                        comments: remarks,
                        travel_status: parseInt(4),
                      };
                      var replace_array = {
                        sitename: global.settings.app_name,
                      };

                      //console.log("cancel00012");

                      apimodel
                        .update_driver_status(q, driver_id, update_driver_array)
                        .then(function (updateresults) {
                          //console.log("cancel00013");
                          apimodel
                            .update_request_details(
                              q,
                              trip_id,
                              update_request_array
                            )
                            .then(function (updateresults) {
                              //console.log("cancel00014");
                              apimodel
                                .update_log_details(
                                  q,
                                  trip_id,
                                  update_logs_array
                                )
                                .then(function (updateresults) {
                                  //console.log("cancel00015");
                                  common
                                    .update_cancel_trip_det(q, trip_id)
                                    .then(function (updateresults) {
                                      //console.log("cancel00016");
                                      apimodel
                                        .get_auto_id(q, t.MDB_TRANS)
                                        .then(function (autoresults) {
                                          //console.log("cancel00017");

                                          try {
                                            if (autoresults.length > 0) {
                                              var inc_id =
                                                autoresults[0]._id + 1;
                                              var insert_array = {
                                                _id: parseInt(inc_id),
                                                passengers_log_id:
                                                  parseInt(trip_id),
                                                remarks: remarks,
                                                payment_type: pay_mod_id,
                                                amt: cancellation_amount,
                                                admin_amount: 0,
                                                company_amount:
                                                  cancellation_amount,
                                                trans_packtype: "N",
                                                current_date: new Date(),
                                              };
                                              //console.log("cancel00018");

                                              apimodel
                                                .insert_passenger_details(
                                                  q,
                                                  insert_array
                                                )
                                                .then(function (insertresults) {
                                                  //console.log("cancel00019");
                                                  common
                                                    .send_sms(
                                                      q,
                                                      passenger_phone,
                                                      10,
                                                      replace_array,
                                                      country_code
                                                    )
                                                    .then(function (
                                                      checkresults
                                                    ) {
                                                      //console.log("cancel00020");
                                                      try {
                                                        var trip_details = [];
                                                        trip_details[
                                                          "trip_id"
                                                        ] = trip_id;

                                                        var socket_msg = {
                                                          message: i18n.__(
                                                            "passenger_trip_cancelled"
                                                          ),
                                                          details: trip_details,
                                                          status: 7,
                                                        };
                                                        var socket_driver_id =
                                                          "D-" + driver_id;
                                                        // if(typeof global.socketobj[socket_driver_id] !=='undefined'){
                                                        // global.socketobj[socket_driver_id].emit('location_update_res',socket_msg);
                                                        // } else {
                                                        // //console.log("Socket missing...");
                                                        // }

                                                        common.emitDriver(
                                                          driver_id,
                                                          socket_msg
                                                        );
                                                        common.emitDispatcher(
                                                          req.io
                                                        );
                                                      } catch (err) {
                                                        //console.log(err);
                                                      }
                                                      message.message = req.__(
                                                        "trip_cancelled_passenger"
                                                      );
                                                      message.cancellation_from =
                                                        req.__("wallet_label");
                                                      message.cancellation_amount =
                                                        cancellation_amount;
                                                      message.status = 1;
                                                      deferred.resolve(message);
                                                      deferred.makeNodeResolver();
                                                      message = null;
                                                    });
                                                });
                                            }
                                          } catch (err) {
                                            //console.log(err);
                                          }
                                        });
                                    });
                                });
                            });
                        });
                    } else {
                      message.message = req.__("insufficient_wallet_amount");
                      message.cancellation_from = 0;
                      message.cancellation_amount = 0;
                      message.status = -1;
                      deferred.resolve(message);
                      deferred.makeNodeResolver();
                      message = null;
                    }
                  }
                });
            }
          }
        } else {
          message.message = req.__("invalid_trip");
          message.status = -1;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        }
      });
    } catch (err) {
      //console.log(err);
    }
  }

  return deferred.promise;
};

function ValidateCancelTrip(q, input) {
  var constraints = {
    trip_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    // remarks: {
    // 	presence: {allowEmpty: false,message:"not empty"},
    // }
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
