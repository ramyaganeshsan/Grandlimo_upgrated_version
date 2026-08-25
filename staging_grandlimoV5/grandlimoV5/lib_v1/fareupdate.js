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
// var passenger_i18n = require('i18n');
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

exports.tripfare_update = function (q, req) {
  var deferred = q.defer();

  //var hostname = req.headers.host;
  var hostname = global.settings.base_url;
  var appRoot = global.settings.docroot;
  var reward_per_trip = global.settings.reward_per_trip;
  if (reward_per_trip) {
    reward_per_trip = reward_per_trip;
  } else {
    reward_per_trip = 0;
  }

  let inputParams = req.body;

  let message = {
    message: "",
    status: 0,
  };

  var validate_error = validateFareUpdate(q, inputParams);

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
    var trip_fare = inputParams.trip_fare;
    var eveningfare = inputParams.eveningfare;
    var corporate_discount = inputParams.corporate_discount;
    var evefare_applicable = inputParams.eveningfare_applicable;
    var pay_mod_id = inputParams.pay_mod_id;
    var fare = inputParams.fare;
    var minutes_traveled = inputParams.minutes_traveled;
    var passenger_discount = inputParams.passenger_discount;
    var actual_amount = inputParams.actual_amount;
    var distance = inputParams.distance;
    var tax_amount = inputParams.tax_amount;
    var actual_distance = inputParams.actual_distance;
    var minutes_fare = inputParams.minutes_fare;
    var nightfare = inputParams.nightfare;
    var waiting_time = inputParams.waiting_time;
    var nightfare_applicable = inputParams.nightfare_applicable;
    var passenger_pending_amt = inputParams.passenger_pending_amt;
    var actual_paid_amt = inputParams.paid_amt;
    //var edit_status = inputParams.edit_status;
    var forceclose_status = inputParams.forceclose_status;
    var wallet_amount_used = inputParams.wallet_amount_used;
    var driver_edit_status = inputParams.edit_status;
    var waiting_cost = inputParams.waiting_cost;
    var distance_fare = inputParams.distance_fare;
    var fare_calculation_type = inputParams.fare_calculation_type;
    var apply_estimate_fare = inputParams.apply_estimate_fare;

    apimodel
      .get_trip_detail_complete(q, trip_id)
      .then(function (detailsresults) {
        //console.log("faree001");
        if (detailsresults.length > 0) {
          //console.log("faree002");

          var travel_status = detailsresults[0].travel_status;
          var driver_id = detailsresults[0].driver_id;
          var driver_status = detailsresults[0].driver_status;
          var driver_image = detailsresults[0].driver_image;
          var driver_name = detailsresults[0].driver_name;
          var passenger_id = detailsresults[0].passengers_id;
          var coordinates = detailsresults[0].coordinates;
          var accuracy = detailsresults[0].accuracy;
          var bearing = detailsresults[0].bearing;
          if (distance == "") {
            distance = 0;
          }
          var trans_id = detailsresults[0].trans_id;
          var actual_pickup_time = detailsresults[0].actual_pickup_time;
          var current_drop_time = detailsresults[0].drop_time;
          var airport_pickup = detailsresults[0].airport_pickup;
          var taxi_modelid = detailsresults[0].taxi_modelid;
          var airport_type = detailsresults[0].airport_type;
          var arrived_time = detailsresults[0].arrived_time;
          var promocode = detailsresults[0].promocode;
          var passenger_phone = detailsresults[0].passenger_phone;
          var passenger_wallet_amount =
            detailsresults[0].passenger_wallet_amount;
          var passenger_id = detailsresults[0].passengers_id;
          var vip_user = detailsresults[0].vip_user;
          var model_id = detailsresults[0].taxi_modelid;
          var pickup_location = detailsresults[0].pickup_location;
          var drop_location = detailsresults[0].drop_location;
          var pickup_latitude = detailsresults[0].pickup_latitude;
          var pickup_longitude = detailsresults[0].pickup_longitude;
          var company_id = detailsresults[0].company_id;
          var tax = global.settings.tax;

          try {
            var passenger_lang =
              typeof detailsresults[0].passenger_lang !== "undefined"
                ? detailsresults[0].passenger_lang
                : "en";
            req.app.locals.passenger_i18n.setLocale(passenger_lang);
          } catch (err) {
            //console.log(err);
          }

          if (
            (travel_status == 1 && trans_id != "" && trans_id != undefined) ||
            (travel_status == 2 && trans_id != "" && trans_id != undefined) ||
            (travel_status == 5 && trans_id != "" && trans_id != undefined)
          ) {
            //console.log("faree003");

            var update_trip_array = {
              travel_status: parseInt(1),
              driver_reply: "A",
              msg_status: "R",
            };

            var update_request_array = {
              status: parseInt(7),
            };

            apimodel
              .update_trip(q, update_trip_array, trip_id)
              .then(function (checkresults) {
                //console.log("faree004");

                apimodel
                  .update_request_details(q, update_request_array, trip_id)
                  .then(function (checkresults) {
                    //console.log("faree005");
                    try {
                      var time_range = getStartingDateAndEndingDate(
                        config.TIMEZONE
                      );

                      common
                        .driver_statistics(q, driver_id, time_range)
                        .then(function (statisticsresults) {
                          driver_statistics = {};

                          if (statisticsresults.length > 0) {
                            driver_statistics = statisticsresults[0];
                          } else {
                            driver_statistics.total_trip = 0;
                            driver_statistics.completed_trip = 0;
                            driver_statistics.total_earnings = 0;
                            driver_statistics.overall_rejected_trips = 0;
                            driver_statistics.cancelled_trips = 0;
                            driver_statistics.today_earnings = 0;
                            driver_statistics.shift_status = "IN";
                            driver_statistics.time_driven = 0;
                            driver_statistics.waiting_time = 0;
                            driver_statistics.status = 1;
                          }

                          message.message = req.__(
                            "trip_fare_and_status_updated"
                          );
                          message.driver_statistics = driver_statistics;
                          message.status = -1;
                          deferred.resolve(message);
                          deferred.makeNodeResolver();
                          message = null;
                        });
                    } catch (err) {
                      //console.log(err);
                    }
                  });
              });
          } else {
            //console.log("faree006");

            try {
              var pending_wallet_amt = (add_amt = advance_payment = 0);

              if (driver_edit_status == 1) {
                pending_wallet_amt = fare - actual_paid_amt;
                driver_edit_status = 1;
              } else {
                pending_wallet_amt = fare - actual_paid_amt;
                if (fare != actual_paid_amt) driver_edit_status = 0;
              }

              if (actual_paid_amt > fare) {
                pending_wallet_amt = 0;
                add_amt = actual_paid_amt - fare;
                actual_paid_amt = fare;
              }
            } catch (err) {
              //console.log(err);
            }

            //console.log("faree007");

            if (pay_mod_id == 1 || pay_mod_id == 2 || pay_mod_id == 6) {
              //console.log("faree0021");
              try {
                var insert_trans_array = {
                  passengers_log_id: parseInt(trip_id),
                  distance: parseFloat(distance),
                  actual_distance: parseFloat(distance),
                  distance_unit: "km",
                  tripfare: parseFloat(trip_fare),
                  distance_fare: parseFloat(distance_fare),
                  fare: parseFloat(fare),
                  tips: 0,
                  waiting_cost: parseFloat(waiting_cost),
                  passenger_discount: parseFloat(passenger_discount),
                  corporate_amount: parseFloat(corporate_discount),
                  company_tax: parseFloat(tax_amount),
                  waiting_time: waiting_time,
                  trip_minutes: parseFloat(minutes_traveled),
                  minutes_fare: parseFloat(minutes_fare),
                  remarks: "-",
                  payment_type: parseInt(pay_mod_id),
                  amt: parseFloat(fare),
                  nightfare_applicable: parseInt(nightfare_applicable),
                  nightfare: parseFloat(nightfare),
                  eveningfare_applicable: parseInt(evefare_applicable),
                  eveningfare: parseFloat(eveningfare),
                  // "admin_amount" : admin_commission,
                  // "company_amount" : company_commission,
                  //"trans_packtype" : trans_packtype,
                  payment_basis: parseInt(0),
                  notify_status: parseInt(0),
                  advance_payment: parseInt(advance_payment),
                  wallet_amount_used: parseFloat(wallet_amount_used),
                  actual_paid_amt: parseFloat(actual_paid_amt),
                  add_amt: parseFloat(add_amt),
                  passenger_pending_amt: parseFloat(passenger_pending_amt),
                  pending_amt: parseFloat(pending_wallet_amt),
                  current_date: new Date(),
                  driver_edit_status: parseInt(driver_edit_status),
                  forceclose_status: parseInt(forceclose_status),
                  reward_point: parseInt(reward_per_trip),
                  fare_calculation_type: parseInt(fare_calculation_type),
                  apply_estimate_fare: parseInt(apply_estimate_fare),
                };
              } catch (err) {
                //console.log(err);
              }

              update_transaction(
                q,
                insert_trans_array,
                trip_id,
                company_id
              ).then(function (transupdateresults) {
                //console.log("faree0022");

                update_promocode(q, promocode, passenger_phone).then(function (
                  transupdateresults
                ) {
                  //console.log("faree0023");

                  update_wallet_used_amount(
                    q,
                    passenger_id,
                    wallet_amount_used,
                    trip_id
                  ).then(function (transupdateresults) {
                    //console.log("faree0024");
                    console.error("transupdateresults : ", transupdateresults);

                    update_passenger_pending_amt(
                      q,
                      passenger_id,
                      passenger_pending_amt,
                      add_amt,
                      driver_edit_status,
                      trip_id
                    ).then(function (transupdateresults) {
                      //console.log("faree0025");
                      try {
                        update_pending_amt(
                          q,
                          passenger_id,
                          pending_wallet_amt,
                          driver_edit_status,
                          trip_id
                        ).then(function (transupdateresults) {
                          //console.log("faree0026");
                          var pending_amt = pending_wallet_amt;
                          if (pay_mod_id == 1) {
                            if (driver_edit_status == 1) {
                              payment_array = {
                                add_amt: parseFloat(add_amt),
                                cash_pay: parseFloat(actual_paid_amt),
                                card_pay: 0,
                                knet_pay: 0,
                                pending_pay: parseFloat(pending_amt),
                                wallet_pay: parseFloat(wallet_amount_used),
                                fare_note: "",
                              };
                            } else {
                              payment_array = {
                                add_amt: parseFloat(add_amt),
                                cash_pay: parseFloat(actual_paid_amt),
                                card_pay: 0,
                                knet_pay: 0,
                                pending_pay: 0,
                                wallet_pay: parseFloat(wallet_amount_used),
                                fare_note: "",
                              };
                            }
                          } else {
                            if (driver_edit_status == 1) {
                              payment_array = {
                                add_amt: parseFloat(add_amt),
                                cash_pay: 0,
                                card_pay: parseFloat(actual_paid_amt),
                                knet_pay: 0,
                                pending_pay: parseFloat(pending_amt),
                                wallet_pay: parseFloat(wallet_amount_used),
                                fare_note: "",
                              };
                            } else {
                              payment_array = {
                                add_amt: parseFloat(add_amt),
                                cash_pay: 0,
                                card_pay: parseFloat(actual_paid_amt),
                                knet_pay: 0,
                                pending_pay: 0,
                                wallet_pay: parseFloat(wallet_amount_used),
                                fare_note: "",
                              };
                            }
                          }

                          try {
                            if (forceclose_status == 1) {
                              payment_array = {
                                add_amt: parseFloat(add_amt),
                                cash_pay: parseFloat(pending_amt),
                                card_pay: 0,
                                knet_pay: 0,
                                pending_pay: 0,
                                wallet_pay: parseFloat(wallet_amount_used),
                                fare_note: "",
                              };
                            }
                          } catch (err) {
                            //console.log(err);
                          }
                          //console.log("faree0027");

                          apimodel
                            .update_payentry(q, payment_array, trip_id)
                            .then(function (transupdateresults) {
                              var update_trip_array = {
                                travel_status: parseInt(1),
                              };

                              var update_shift_array = {
                                status: "F",
                              };

                              var update_request_array = {
                                status: parseInt(8),
                              };
                              //console.log("faree0028");

                              apimodel
                                .update_trip(q, update_trip_array, trip_id)
                                .then(function (checkresults) {
                                  apimodel
                                    .update_driver_shift(
                                      q,
                                      update_shift_array,
                                      driver_id
                                    )
                                    .then(function (checkresults) {
                                      apimodel
                                        .update_request_details(
                                          q,
                                          update_request_array,
                                          trip_id
                                        )
                                        .then(function (checkresults) {
                                          //console.log("faree0029");
                                          common
                                            .update_completed_trip_det(
                                              q,
                                              trip_id
                                            )
                                            .then(function (checkresults) {
                                              //console.log("faree0030");
                                              //sms send
                                              var replace_array = {
                                                sitename:
                                                  global.settings.app_name,
                                              };
                                              common
                                                .send_sms(
                                                  q,
                                                  passenger_phone,
                                                  5,
                                                  replace_array
                                                )
                                                .then(function (
                                                  checkresults
                                                ) {});
                                              //static maps
                                              common
                                                .generate_static_maps(
                                                  q,
                                                  trip_id
                                                )
                                                .then(function (
                                                  checkresults
                                                ) {});
                                              common
                                                .add_trip_reward(
                                                  q,
                                                  passenger_id,
                                                  reward_per_trip
                                                )
                                                .then(function (
                                                  checkresults
                                                ) {});
                                              var time_range =
                                                getStartingDateAndEndingDate(
                                                  config.TIMEZONE
                                                );
                                              common
                                                .driver_statistics(
                                                  q,
                                                  driver_id,
                                                  time_range
                                                )
                                                .then(function (
                                                  statisticsresults
                                                ) {
                                                  //console.log("faree0031");
                                                  var driver_statistics = {};

                                                  var details = {
                                                    fare: fare,
                                                    pickup: pickup_location,
                                                    jobreferral: trip_id,
                                                    trip_id: trip_id,
                                                  };

                                                  if (
                                                    statisticsresults.length > 0
                                                  ) {
                                                    driver_statistics =
                                                      statisticsresults[0];
                                                  } else {
                                                    driver_statistics.total_trip = 0;
                                                    driver_statistics.completed_trip = 0;
                                                    driver_statistics.total_earnings = 0;
                                                    driver_statistics.overall_rejected_trips = 0;
                                                    driver_statistics.cancelled_trips = 0;
                                                    driver_statistics.today_earnings = 0;
                                                    driver_statistics.shift_status =
                                                      "IN";
                                                    driver_statistics.time_driven = 0;
                                                    driver_statistics.waiting_time = 0;
                                                    driver_statistics.status = 1;
                                                  }

                                                  apimodel
                                                    .get_ratings_info(q)
                                                    .then(function (
                                                      ratingsresults
                                                    ) {
                                                      var ratings_info = [];
                                                      if (
                                                        ratingsresults.length >
                                                        0
                                                      ) {
                                                        ratings_info =
                                                          ratingsresults;
                                                      }
                                                      try {
                                                        var trip_details = [];
                                                        trip_details[
                                                          "trip_id"
                                                        ] = trip_id;

                                                        var socket_msg = {
                                                          message:
                                                            "trip_fare_updated",
                                                          detail: trip_details,
                                                          driver_latitute:
                                                            coordinates[1],
                                                          driver_longitude:
                                                            coordinates[0],
                                                          bearing: bearing,
                                                          accuracy: accuracy,
                                                          fare: fare,
                                                          trip_id: trip_id,
                                                          base_fare: base_fare,
                                                          passenger_discount:
                                                            insert_trans_array.passenger_discount,
                                                          payment_type:
                                                            insert_trans_array.payment_type,
                                                          journey_date:
                                                            common.convert_timezone(
                                                              actual_pickup_time
                                                            ),
                                                          driver_name:
                                                            driver_name,
                                                          driver_image:
                                                            get_driver_profile(
                                                              appRoot,
                                                              driver_image,
                                                              hostname
                                                            ),
                                                          pickup:
                                                            pickup_location,
                                                          drop: drop_location,
                                                          ratings_info:
                                                            ratings_info,
                                                          display: 1,
                                                          status: 5,
                                                        };
                                                        console.log(
                                                          "socket_msg1",
                                                          socket_msg
                                                        );

                                                        // 	var socket_pass_id = 'P-'+passenger_id;
                                                        // 	if(typeof global.socketobj[socket_pass_id] !=='undefined'){
                                                        // 	global.socketobj[socket_pass_id].emit('update_trip_status',socket_msg);
                                                        // } else {
                                                        // 	//console.log("Socket missing...");
                                                        // }

                                                        common.emitPassenger(
                                                          passenger_id,
                                                          socket_msg
                                                        );
                                                        common.emitDispatcher(
                                                          req.io
                                                        );
                                                      } catch (err) {
                                                        //console.log(err);
                                                      }

                                                      message.message =
                                                        req.__(
                                                          "trip_fare_updated"
                                                        );
                                                      message.driver_statistics =
                                                        driver_statistics;
                                                      message.details = details;
                                                      message.status = 1;
                                                      deferred.resolve(message);
                                                      deferred.makeNodeResolver();
                                                      message = null;
                                                    });
                                                });
                                            });
                                        });
                                    });
                                });
                            });
                        });
                      } catch (err) {
                        //console.log(err);
                      }
                    });
                  });
                });
              });
            } else if (pay_mod_id == 3) {
              //console.log('fare008')
              common
                .hesabe_pay(q, passenger_id, parseFloat(fare), hostname)
                .then(function (hesaberesults) {
                  //console.log(hesaberesults);

                  if (hesaberesults.response.status == "success") {
                    var details = hesaberesults.response.data;

                    //static maps
                    common
                      .generate_static_maps(q, passenger_id)
                      .then(function (checkresults) {});

                    apimodel
                      .insert_temp_logs(q, inputParams)
                      .then(function (insertresults) {
                        message.message = hesaberesults.response.message;
                        //message.driver_statistics = driver_statistics;
                        message.details = details;
                        message.status = 1;
                        deferred.resolve(message);
                        deferred.makeNodeResolver();
                        message = null;
                      });
                  } else {
                    message.message = hesaberesults.response.message;
                    //message.driver_statistics = driver_statistics;
                    message.status = -1;
                    deferred.resolve(message);
                    deferred.makeNodeResolver();
                    message = null;
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
  }

  return deferred.promise;
};

function validateFareUpdate(q, input) {
  var constraints = {
    trip_fare: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
    eveningfare: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
    eveningfare_applicable: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
    waiting_cost: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
    pay_mod_id: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
    fare: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
    minutes_traveled: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
    fare: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
    passenger_discount: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
    // actual_amount: {
    // presence: {allowEmpty: false,message:"must not empty"},
    // },
    trip_id: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
    distance: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
    tax_amount: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
    minutes_fare: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
    nightfare: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
    waiting_time: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
    paid_amt: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
    edit_status: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
    passenger_pending_amt: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
    forceclose_status: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
    wallet_amount_used: {
      presence: { allowEmpty: false, message: "must not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function update_complete_status(
  q,
  travel_status,
  drop_time,
  actual_pickup_time,
  total_distance,
  tax,
  drop_latitude,
  drop_longitude,
  drop_location,
  waiting_hours,
  trip_id
) {
  var deferred = q.defer();

  //console.log("heeere003");

  if (travel_status != 5) {
    try {
      var update_trip_array = {
        travel_status: parseInt(5),
        driver_reply: "A",
        msg_status: "R",
        drop_latitude: drop_latitude,
        drop_longitude: drop_longitude,
        drop_location: drop_location,
        distance: total_distance,
        drop_time: new Date(),
        waitingtime: waiting_hours,
        company_tax: tax,
      };

      var update_request_array = {
        status: parseInt(7),
      };

      var drop_time = new Date();

      //console.log(drop_time);
      apimodel
        .update_trip(q, update_trip_array, trip_id)
        .then(function (checkresults) {
          apimodel
            .update_request_details(q, update_request_array, trip_id)
            .then(function (checkresults) {
              var time_interval =
                drop_time.getTime() - actual_pickup_time.getTime();

              deferred.resolve(time_interval);
              deferred.makeNodeResolver();
              time_interval = null;
            });
        });
    } catch (err) {
      //console.log(err);
    }
  } else {
    //console.log("heeere004");
    try {
      var time_interval = drop_time.getTime() - actual_pickup_time.getTime();
      deferred.resolve(time_interval);
      deferred.makeNodeResolver();
      time_interval = null;
    } catch (err) {
      //console.log(err);
    }
  }

  return deferred.promise;
}

function calculate_discount(q, promocode, total_fare) {
  var deferred = q.defer();

  var details = {};

  if (promocode == "") {
    details.passenger_discount = 0;
    details.corporate_discount = 0;
    deferred.resolve(details);
    deferred.makeNodeResolver();
    time_interval = null;
  }

  apimodel
    .get_promocode_details(q, promocode)
    .then(function (promocoderesults) {
      if (promocoderesults.length > 0) {
        var package = promocoderesults[0].package;
        var promo_limit = promocoderesults[0].promo_limit;
        var total_applied = promocoderesults[0].total_applied;

        apimodel
          .get_promocode_details(q, package)
          .then(function (packageresults) {
            if (packageresults.length > 0) {
              var passenger_commission = packageresults[0].passenger_commission;
              var corporate_commission = packageresults[0].corporate_commission;

              if (total_applied < promo_limit) {
                var passenger_discount = total_fare * passenger_commission;
                var corporate_discount = total_fare * corporate_commission;

                details.passenger_discount = passenger_discount;
                details.corporate_discount = corporate_discount;
                deferred.resolve(details);
                deferred.makeNodeResolver();
                time_interval = null;
              } else {
                details.passenger_discount = 0;
                details.corporate_discount = 0;
                deferred.resolve(details);
                deferred.makeNodeResolver();
                time_interval = null;
              }
            } else {
              details.passenger_discount = 0;
              details.corporate_discount = 0;
              deferred.resolve(details);
              deferred.makeNodeResolver();
              time_interval = null;
            }
          });
      } else {
        details.passenger_discount = 0;
        details.corporate_discount = 0;
        deferred.resolve(details);
        deferred.makeNodeResolver();
        time_interval = null;
      }
    });

  return deferred.promise;
}

function update_transaction(q, update_array, trip_id, company_id) {
  var deferred = q.defer();

  var details = {};

  var admin_commission = global.settings.admin_commission * update_array.fare;
  var company_commission = update_array.fare - admin_commission;
  var trans_packtype = "N";

  apimodel
    .update_admin_balance(q, admin_commission)
    .then(function (updatetransresults) {
      apimodel
        .update_company_balance(q, company_commission, company_id)
        .then(function (updatetransresults) {
          update_array.admin_amount = parseFloat(admin_commission);
          update_array.company_amount = parseFloat(company_commission);
          update_array.trans_packtype = trans_packtype;

          apimodel.get_auto_id(q, t.MDB_TRANS).then(function (autoidresults) {
            if (autoidresults.length > 0) {
              var last_insert_id = autoidresults[0]._id + 1;

              update_array._id = last_insert_id;

              apimodel
                .check_trans_exists(q, trip_id)
                .then(function (transresults) {
                  if (transresults.length > 0) {
                    apimodel
                      .update_transaction(q, update_array, trip_id)
                      .then(function (updateresults) {
                        details.admin_commission = admin_commission;
                        details.company_commission = company_commission;
                        details.trans_packtype = trans_packtype;
                        details.status = 1;
                        deferred.resolve(details);
                        deferred.makeNodeResolver();
                        time_interval = null;
                      });
                  } else {
                    apimodel
                      .insert_transaction(q, update_array, trip_id)
                      .then(function (updateresults) {
                        details.status = 1;
                        details.admin_commission = admin_commission;
                        details.company_commission = company_commission;
                        details.trans_packtype = trans_packtype;
                        deferred.resolve(details);
                        deferred.makeNodeResolver();
                        time_interval = null;
                      });
                  }
                });
            } else {
              details.status = 0;
              details.admin_commission = admin_commission;
              details.company_commission = company_commission;
              details.trans_packtype = trans_packtype;
              deferred.resolve(details);
              deferred.makeNodeResolver();
              time_interval = null;
            }
          });
        });
    });

  return deferred.promise;
}

function update_wallet_logs(
  q,
  passenger_id,
  add_amt,
  negative,
  trip_id,
  recharge_type
) {
  var deferred = q.defer();

  //console.log(passenger_id,add_amt,negative,trip_id,recharge_type);
  //72 14.5 0 1555 6

  var details = {};

  //console.log('herer021');

  //console.log('passenger_id',passenger_id);

  apimodel
    .get_passenger_details(q, passenger_id)
    .then(function (detailresults) {
      //console.log('detailresults',detailresults.length);

      if (detailresults.length > 0) {
        try {
          if (typeof detailresults[0].wallet_amount !== "undefined") {
            var current_wallet_amount = detailresults[0].wallet_amount;
          } else {
            var current_wallet_amount = 0;
          }

          var update_wallet_amt = 0;
          var additional_amt = 0;

          if (negative == 1) {
            update_wallet_amt = current_wallet_amount - add_amt;
            additional_amt = -add_amt;
          } else {
            update_wallet_amt = current_wallet_amount + add_amt;
            additional_amt = add_amt;
          }

          //console.log()

          var updateArray = {
            wallet_amount: parseFloat(update_wallet_amt),
            last_wallet_update: new Date(),
          };
        } catch (err) {
          //console.log(err);
        }
        //console.log('herer022');

        apimodel
          .update_passenger(q, updateArray, passenger_id)
          .then(function (detailresults) {
            //console.log('herer023');

            if (recharge_type == "") {
              recharge_type = 4;
            }

            var insert_array = {
              passenger_id: parseInt(passenger_id),
              change_amount: parseFloat(add_amt),
              wallet_amount: parseFloat(update_wallet_amt),
              created_date: new Date(),
              created_by: parseInt(passenger_id),
              recharge_type: parseInt(recharge_type),
              trip_id: parseInt(trip_id),
              paid_status: parseInt(1),
            };

            apimodel
              .insert_wallet_logs(q, insert_array)
              .then(function (detailresults) {
                //console.log('herer024');

                details.status = 1;
                deferred.resolve(details);
                deferred.makeNodeResolver();
                time_interval = null;
              });
          });
      } else {
        details.status = 0;
        deferred.resolve(details);
        deferred.makeNodeResolver();
        time_interval = null;
      }
    });

  return deferred.promise;
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
    //console.log(err);
    return "00:00:00";
  }
}

function update_promocode(q, promocode, passenger_phone) {
  var deferred = q.defer();
  var details = {};

  if (promocode != "") {
    apimodel
      .update_promocode_new(q, promocode, passenger_phone)
      .then(function (promoupdateresults) {
        details.status = 1;
        deferred.resolve(details);
        deferred.makeNodeResolver();
        time_interval = null;
      });
  } else {
    details.status = 0;
    deferred.resolve(details);
    deferred.makeNodeResolver();
    time_interval = null;
  }
  return deferred.promise;
}

function update_wallet_used_amount(
  q,
  passenger_id,
  wallet_used_amount,
  trip_id
) {
  var deferred = q.defer();
  var details = {};
  try {
    if (wallet_used_amount != "" && wallet_used_amount != 0) {
      update_wallet_logs(
        q,
        passenger_id,
        wallet_used_amount,
        1,
        trip_id,
        4
      ).then(function (walletupdateresults) {
        details.status = 1;
        deferred.resolve(details);
        deferred.makeNodeResolver();
        time_interval = null;
      });
    } else {
      details.status = 0;
      deferred.resolve(details);
      deferred.makeNodeResolver();
      time_interval = null;
    }
  } catch (err) {
    //console.log(err);
  }
  return deferred.promise;
}

function update_passenger_pending_amt(
  q,
  passenger_id,
  passenger_pending_amt,
  add_amt,
  driver_edit_status,
  trip_id
) {
  var deferred = q.defer();
  var details = {};

  //console.log(passenger_pending_amt,add_amt,driver_edit_status,trip_id);

  //14.5 0 1 1555

  if (driver_edit_status == 0) {
    passenger_pending_amt = 0;
  }

  if (passenger_pending_amt > 0 || (add_amt > 0 && driver_edit_status == 1)) {
    var update_amt = 0;
    if (add_amt > 0) {
      update_amt = passenger_pending_amt + add_amt;
    } else {
      update_amt = passenger_pending_amt;
    }

    update_wallet_logs(q, passenger_id, update_amt, 0, trip_id, 6).then(
      function (walletupdateresults) {
        details.status = 1;
        deferred.resolve(details);
        deferred.makeNodeResolver();
        time_interval = null;
      }
    );
  } else {
    details.status = 0;
    deferred.resolve(details);
    deferred.makeNodeResolver();
    time_interval = null;
  }
  return deferred.promise;
}

function update_pending_amt(
  q,
  passenger_id,
  pending_amt,
  driver_edit_status,
  trip_id
) {
  var deferred = q.defer();
  var details = {};

  if (pending_amt > 0 && driver_edit_status == 1) {
    update_wallet_logs(q, passenger_id, pending_amt, 1, trip_id, 5).then(
      function (walletupdateresults) {
        details.status = 1;
        deferred.resolve(details);
        deferred.makeNodeResolver();
        time_interval = null;
      }
    );
  } else {
    details.status = 0;
    deferred.resolve(details);
    deferred.makeNodeResolver();
    time_interval = null;
  }
  return deferred.promise;
}

function get_driver_profile(appRoot, profile, hostname) {
  try {
    if (fs.existsSync(appRoot + "public/uploads/driver_image/" + profile)) {
      return hostname + "/" + "public/uploads/driver_image/" + profile;
    } else {
      return hostname + "/" + config.NO_IMAGE;
    }
  } catch (ex) {
    //console.log('error',ex);
  }
}

function zeropadding(a) {
  h = a < 10 ? "0" + a : a;

  return h;
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
